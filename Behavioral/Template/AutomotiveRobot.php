<?php

namespace DesignPatterns\Behavioral\Template;

class AutomotiveRobot extends RobotTemplate
{
  private  $name;

	public function __construct($n)
	{
		$this->name = $n;
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

	public function getName()
	{
		return $this->name;
	}
}
