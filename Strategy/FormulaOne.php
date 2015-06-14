<?php

include_once('Vehicule.php');
include_once('GoByDrivingAlgorithm.php');

class FormulaOne extends Vehicule
{
	
	function __construct()
	{
		$this->setGoAlgorithm(new GoByDrivingAlgorithm());
	}
	
}
