<?php

namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator as Decorator;

/**
 * DecoratorTest tests the decorator pattern
 */
class DecoratorTest
{

    protected $service;
    
    public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function setUp()
    {
        $this->service = new Decorator\Webservice(array('foo' => 'bar'));
    }

    public function testJsonDecorator()
    {
        // Wrap service with a JSON decorator for renderers
        $service = new Decorator\RenderInJson($this->service);
        // Our Renderer will now output JSON instead of an array
        return $service->renderData();
    }

    public function testXmlDecorator()
    {
        // Wrap service with a JSON decorator for renderers
        $service = new Decorator\RenderInXml($this->service);
        // Our Renderer will now output XML instead of an array
        return $service->renderData();
    }
}

define('BASE_PATH', '/Users/skanderjabouzi/Development/DesignPatternsAndOOP');

spl_autoload_register(__NAMESPACE__.'\DecoratorTest::load');

$decoratorTest = new DecoratorTest();
$decoratorTest->setUp();
echo $decoratorTest->testJsonDecorator().PHP_EOL;
echo $decoratorTest->testXmlDecorator().PHP_EOL;

