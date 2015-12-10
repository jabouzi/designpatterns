<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\AutomotiveRobotBuildable as AutomotiveRobotBuildable;
use DesignPatterns\Creational\Builder\AutomotiveRobotBuilder as AutomotiveRobotBuilder;
use DesignPatterns\Creational\Builder\CookieRobotBuildable as CookieRobotBuildable;
use DesignPatterns\Creational\Builder\CookieRobotBuiler as CookieRobotBuiler;

class RobotBuilderTest
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}
	
	public function test()
	{
		$builder = new CookieRobotBuilder();

		//Start the construction process->

		$builder->addStart();
		$builder->addTest();
		$builder->addAssemble();
		$builder->addStop();
		$robot = $builder->getRobot();
		$robot->go();
		
		$builder = new AutomotiveRobotBuilder();

		//Start the construction process->

		$builder->addStart();
		$builder->addTest();
		$builder->addAssemble();
		$builder->addStop();
		$robot = $builder->getRobot();
		$robot->go();
	}
}

define('BASE_PATH', str_replace('/DesignPatterns/Creational/Builder', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\RobotBuilderTest::load');

$robotBuilderTest = new RobotBuilderTest();
$robotBuilderTest->test();
