<?php

namespace DesignPatterns\Behavioral\Template;

abstract class RobotTemplate
{
	public function go()
	{
		$this->start();
		$this->getParts();
		$this->assemble();
		$this->test();
		$this->stop();    
	}

	public function start()
	{
		echo("Starting....\n");
	}

	public function getParts()
	{
		echo("Getting parts....\n");
	}

	public function assemble()
	{
		echo("Assembling....\n");
	}

	public function test()
	{
		echo("Testing....\n");
	}

	public function stop()
	{
		echo("Stopping....\n");
	}
}
