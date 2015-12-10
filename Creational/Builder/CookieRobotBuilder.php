<?php

namespace DesignPatterns\Creational\Builder; 

class CookieRobotBuilder implements RobotBuilder
{
	public $robot;
	public $actions; 

	public function __construct()
	{
		$this->robot = new AutomotiveRobotBuildable();
		$this->actions = array();
	}

	public function addStart()
	{
		$this->actions[] = 1; 
	}

	public function addGetParts()
	{
		$this->actions[] = 2; 
	}

	public function addAssemble()
	{
		$this->actions[] = 3; 
	}

	public function addTest()
	{
		$this->actions[] = 4; 
	}

	public function addStop()
	{
		$this->actions[] = 5; 
	}

	public function getRobot()
	{
		$this->robot->loadActions($this->actions);
		return $this->robot;
	}

}
