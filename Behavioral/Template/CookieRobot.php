<?php

namespace DesignPatterns\Behavioral\Template;

class CookieRobot extends RobotTemplate
{
	private $name;

	public function __construct($n)
	{
		$this->name = $n;
	}

	public function getParts()
	{
		echo("Getting a flour and sugar....\n");
	}

	public function assemble()
	{
		echo("Baking a cookie....\n");
	}

	public function test()
	{
		echo("Crunching a cookie....\n");
	}

	public function getName()
	{
		return $this->name;
	}
}
