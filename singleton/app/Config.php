<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static $_instance;
    private $settings;

    public static function getInstance()
    {
        if(is_null(self::$_instance)) {
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    public function __construct() 
    {
        $this->settings = require(__DIR__.'/../config/config.php'); 
    }

    public function get($key) 
    {
        return $this->settings[$key];
    }


}