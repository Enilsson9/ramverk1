<?php

namespace Edward\Validate;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleJsonController.
 */
class ValidateIpControllerTest extends TestCase
{

    // Create the di container.
    protected $di;
    protected $controller;



    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;

        // Setup di
        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // View helpers uses the global $di so it needs its value
        $di = $this->di;

        // Setup the controller
        $this->controller = new ValidateIpController();
        $this->controller->setDI($this->di);
        //$this->controller->initialize();
    }



    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        $res = $this->controller->indexAction();
        $this->assertInternalType("object", $res);
    }


    /**
     * Test the route "dump-di".
     */
    public function testGetProtocolResult()
    {
        $object = new ValidateIp();
        $res = $this->controller->getProtocolResult("186.151.62.176", $object);
        $this->assertInternalType("string", $res);
    }

    /**
     * Test the route "dump-di".
     */
    public function testGetProtocolResultFalse()
    {
        $object = new ValidateIp();
        $res = $this->controller->getProtocolResult("123456789", $object);
        $this->assertInternalType("string", $res);
    }
}
