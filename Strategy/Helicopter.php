<?php

include_once('Vehicule.php');
include_once('GoByFlyingAlgorithm.php');

class Helicopter extends Vehicule
{
	function __construct()
	{
		$this->setGoAlgorithm(new GoByFlyingAlgorithm());
	}
}
