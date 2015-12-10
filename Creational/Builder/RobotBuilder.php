<?php

namespace DesignPatterns\Creational\Builder;

interface RobotBuilder 
{
	public function addStart();
	public function addGetParts();
	public function addAssemble();
	public function addTest();
	public function addStop();
	public function getRobot();
}
