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
class ValidateIpController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * @var string $db a sample member variable that gets initialised
     */
    private $ipAddress;
    private $object;


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
        $this->ipAddress = $request->getGet("ip");

        $ip = $this->ipAddress;
        $protocol = null;
        $host = null;
        $details = null;

        $this->object = new ValidateIp();

        if ($this->ipAddress === null) {
            $ip = $this->object->getCurrentIp();
        }

        $protocol = $this->getProtocolResult($this->ipAddress, $this->object);
        $host = $this->object->getHost($this->ipAddress);
        $details = $this->object->getIpDetails($this->ipAddress);

        $data["details"] = $details;
        $data["protocol"] = $protocol;
        $data["host"] = $host;
        $data["ip"] = $ip;

        $page->add("anax/v2/validate/index", $data);

        return $page->render([
            "title" => $title,
        ]);
    }


    /**
     * Check if IP is valid or not.
     * GET ip
     *
     * @return string
     */
    public function getProtocolResult($ipAddress, $object) : string
    {
        if ($object->getProtocol($ipAddress)) {
            return "The IP $ipAddress is a valid " . $object->getProtocol($ipAddress) ." address." ;
        }

        return "The IP $ipAddress is not valid.";
    }
}
