<?php

namespace Edward\Weather;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * A sample controller to show how a controller class can be implemented.
 * The controller will be injected with $di if implementing the interface
 * ContainerInjectableInterface, like this sample class does.
 * The controller is mounted on a particular route and can then handle all
 * requests for that mount point.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class WeatherIpController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * @var string $db a sample member variable that gets initialised
     */
    private $ipAddress;
    private $object;
    private $requester;


    /**
     * Display the view
     *
     * @return object
     */
    public function indexAction() : object
    {
        $title = "Check IP";

        $page = $this->di->get("page");
        $request = $this->di->get("request");
        $this->requester = $this->di->get("requester");

        $this->ipAddress = $request->getGet("ip");
        $currentIp = $this->ipAddress;
        $this->object = new WeatherIp();

        $currentIp = $this->object->validateIp($this->ipAddress);

        $accessKey  = '49a95e2b98f16776978bbf2d3097c542';
        $details = $this->requester->curlJson('http://api.ipstack.com/'.$currentIp.'?access_key='.$accessKey);

        $accessKey  = '6ff1debe5cff84d291f5345bd079fd90';
        $weather = $this->requester->curlJson('https://api.darksky.net/forecast/'.$accessKey .'/'.$details['latitude'].','.$details['longitude']);

        $data["details"] = $details;
        $data["weather"] = $weather;
        $data["currentIp"] = $currentIp;

        $page->add("anax/v2/weather/index", $data);

        return $page->render([
            "title" => $title,
        ]);
    }
}
