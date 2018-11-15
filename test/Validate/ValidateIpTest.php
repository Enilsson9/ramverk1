<?php

namespace Edward\Validate;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleJsonController.
 */
class ValidateIpTest extends TestCase
{

    // Create the di container.
    protected $di;
    protected $controller;



    /**
     * Just assert something is true.
     */
    public function testGetProtocolIPv4()
    {
        $object = new ValidateIp();
        $ipAddress = "186.151.62.176";
        $res = $object->getProtocol($ipAddress);
        $exp = "IPv4";

        $this->assertEquals($exp, $res);
    }


    /**
     * Just assert something is true.
     */
    public function testGetProtocolIPv6()
    {
        $object = new ValidateIp();
        $ipAddress = "2a03:2880:2110:df07:face:b00c::1";
        $res = $object->getProtocol($ipAddress);
        $exp = "IPv6";

        $this->assertEquals($exp, $res);
    }

    /**
     * Just assert something is true.
     */
    public function testGetProtocolFalse()
    {
        $object = new ValidateIp();
        $ipAddress = "123456789";
        $res = $object->getProtocol($ipAddress);
        $exp = false;

        $this->assertEquals($exp, $res);
    }

    /**
     * Just assert something is true.
     */
    public function testGetHostTrue()
    {
        $object = new ValidateIp();
        $ipAddress = "186.151.62.176";
        $res = $object->getHost($ipAddress);
        $exp = "176.62.151.186.static.intelnet.net.gt";

        $this->assertEquals($exp, $res);
    }

    /**
     * Just assert something is true.
     */
    public function testGetHostFalse()
    {
        $object = new ValidateIp();
        $ipAddress = "123456789";
        $res = $object->getHost($ipAddress);
        $exp = "None";

        $this->assertEquals($exp, $res);
    }
}
