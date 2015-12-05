<?php

namespace DesignPatterns\Structural\FlyWeight;

use DesignPatterns\Structural\FlyWeight\Student as Student;

class FlyweightTest
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}
	
	public function test()
	{
		$names = array("Ralph", "Alice", "Sam");
		$ids = [1001, 1002, 1003];
		$scores = [45, 55, 65];

		$total = 0;
		for ($loopIndex = 0; $loopIndex < count($scores); $loopIndex++)
		{
			$total += $scores[$loopIndex];
		}

		$averageScore = $total / count($scores);

		$student = new Student($averageScore);

		for ($loopIndex = 0; $loopIndex < count($scores); $loopIndex++)
		{
			$student->setName($names[$loopIndex]);
			$student->setId($ids[$loopIndex]);
			$student->setScore($scores[$loopIndex]);
		  
			echo("Name: " . $student->getName());
			echo PHP_EOL;
			echo("ID: " . $student->getID());
			echo PHP_EOL;
			echo("Standing: " . round($student->getStanding()));
			echo PHP_EOL;
		}
	}
}

define('BASE_PATH', str_replace('/DesignPatterns/Structural/FlyWeight', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\FlyweightTest::load');

$flyweightTest = new FlyweightTest();
$flyweightTest->test();
