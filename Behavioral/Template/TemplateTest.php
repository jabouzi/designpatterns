<?php

namespace DesignPatterns\Behavioral\Template;

use DesignPatterns\Behavioral\Template\RootTemplate as RootTemplate;
use DesignPatterns\Behavioral\Template\AutomotiveRobot as AutomotiveRobot;
use DesignPatterns\Behavioral\Template\CookieRobot as CookieRobot;

class TemplateTest
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}
	
	public function test()
	{
		$automotiveRobot = new AutomotiveRobot("Automotive Robot");
		$cookieRobot = new CookieRobot("Cookie Robot");

		echo($automotiveRobot->getName() . " :");
		$automotiveRobot->go();
		echo PHP_EOL;
		echo($cookieRobot->getName() . " :");
		$cookieRobot->go();
	}
}

define('BASE_PATH', str_replace('/DesignPatterns/Behavioral/Template', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\TemplateTest::load');

$templateTest = new TemplateTest();
$templateTest->test();

