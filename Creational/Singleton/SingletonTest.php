<?php

namespace DesignPatterns\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Singleton as Singleton;

/**
 * SingletonTest tests the singleton pattern
 */
class SingletonTest
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function test()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();
        $thirdCall = Singleton::getInstance();
        $fourthCall = new Singleton(); // FATAL ERROR;
    }
}

define('BASE_PATH', str_replace('/DesignPatterns/Creational/Singleton', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\SingletonTest::load');

$singletonTest = new SingletonTest();
$singletonTest->test();
