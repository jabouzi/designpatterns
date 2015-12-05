<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * class Singleton
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;
    
    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        else
        {
			 echo "Singleton is used\n";
		}
       

        return static::$instance;
    }

    /**
     * is not allowed to call from outside: private!
     *
     */
    private function __construct()
    {
		echo "Constrcuct is used\n";
    }

    /**
     * prevent the instance from being cloned
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
