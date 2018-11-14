<?php
/**
 * These routes are for demonstration purpose, to show how routes and
 * handlers can be created.
 */
 return [
     "routes" => [
         [
             "info" => "Validera IP adresser",
             "mount" => "validera",
             "handler" => "\Edward\Validate\ValidateIpController",
         ],
     ]
 ];
