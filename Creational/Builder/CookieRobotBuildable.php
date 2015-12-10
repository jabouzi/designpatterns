<?php

namespace DesignPatterns\Creational\Builder; 

class CookieRobotBuildable implements RobotBuildable
{
	public $actions;

	public function __construct()
	{
		$this->actions = array();
	}

	public function go()
	{
		foreach($this->actions as $action) {
			switch ((int)$action){
			case 1: 
				$this->start();
				break;
			case 2: 
				$this->getParts();
				break;
			case 3: 
				$this->assemble();
				break;
			case 4: 
				$this->test();
				break;
			case 5: 
				$this->stop();
				break;
			}
		}
	}

	public function start()
	{
		echo("Starting....\n");
	}

	public function getParts()
	{
		echo("Getting a carburetor....\n");
	}

	public function assemble()
	{
		echo("Installing the carburetor....\n");
	}

	public function test()
	{
		echo("Revving the engine....\n");
	}

	public function stop()
	{
		echo("Stopping....\n");
	}

	public function loadActions($a)
	{
		$this->actions = $a;
	}
}
