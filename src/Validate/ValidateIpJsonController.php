<?php

namespace Edward\Validate;

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
class ValidateIpJsonController extends ValidateIpController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    private $ipAddress;
    private $object;

    /**
     * Display the view
     *
     * @return object
     */
    public function indexAction() : object
    {
        $title = "Check IP (JSON)";

        $page = $this->di->get("page");
        $request = $this->di->get("request");
        $json = null;

        $this->ipAddress = $request->getGet("ip");
        $this->object = new ValidateIp();
        $json = $this->showIpJson($this->ipAddress, $this->object);

        $data['json'] = $json;

        $page->add("anax/v2/validate/json", $data);

        return $page->render([
            "title" => $title,
        ]);
    }


    /**
     * Check if IP is valid or not and return host.
     * GET ip
     *
     * @return array
     */
    public function showIpJson($ipAddress, $object) : array
    {

        $json = [
            "ip" => $ipAddress,
            "protocol" => $object->getProtocol($ipAddress),
            "host" => $object->getHost($ipAddress),
        ];

        return [$json];
    }
}
