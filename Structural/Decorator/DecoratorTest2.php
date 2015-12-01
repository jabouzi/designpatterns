<?php

namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator as Decorator;

/**
 * DecoratorTest tests the decorator pattern
 */
class DecoratorTest
{

    public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function test()
    {
        $computer = new Decorator\Computer();
        $computer = new Decorator\Disk($computer);
		$computer = new Decorator\Monitor($computer);
		$computer = new Decorator\Cd($computer);
        //$computer = new Decorator\ComponentDecorator();
        return 'You are getting a '.$computer->description();
    }
}

define('BASE_PATH', '/Users/skanderjabouzi/Development/DesignPatternsAndOOP');

spl_autoload_register(__NAMESPACE__.'\DecoratorTest::load');

$decoratorTest = new DecoratorTest();
echo $decoratorTest->test().PHP_EOL;

