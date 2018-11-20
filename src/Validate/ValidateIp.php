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
class ValidateIp implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
     * Check if IP is valid or not.
     * GET ip
     *
     * @return string
     */
    public function getProtocol($ipAddress)
    {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
            if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                return "IPv4";
            }

            if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                return "IPv6";
            }
        }
        return false;
    }


    /**
     * Check if IP is valid or not.
     * GET  host
     *
     * @return string
     */
    public function getHost($ipAddress)
    {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
            return gethostbyaddr($ipAddress);
        }

        return "None";
    }

    /**
     * Return client's IP
     * GET ip
     *
     * @return string
     */
    public function getCurrentIp()
    {
        return $_SERVER["REMOTE_ADDR"] ?? '127.0.0.1';
    }

    /**
     * Check if IP is valid or not.
     * GET  host
     *
     * @return string
     */
    public function getIpDetails($ipAddress)
    {
        // set IP address and API access key
        $access_key = '49a95e2b98f16776978bbf2d3097c542';

        // Initialize CURL:
        $ch = curl_init('http://api.ipstack.com/'.$ipAddress.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        return json_decode($json, true);
    }
}
