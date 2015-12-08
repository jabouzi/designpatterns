<?php

namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\DifficultProduct as DifficultProduct;
use DesignPatterns\Structural\Facade\SimpleProductFacade as SimpleProductFacade;

class FacadeTest 
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}
	
	public function __construct()
	{

	}

	public function test()
	{

		$simpleProductFacade = new SimpleProductFacade();

		$simpleProductFacade->setName("printer");

		echo ("The product is a " . $simpleProductFacade->getName());
		echo PHP_EOL;
	}
}


define('BASE_PATH', str_replace('/DesignPatterns/Structural/Facade', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\FacadeTest::load');

$facadeTest = new FacadeTest();
$facadeTest->test();
