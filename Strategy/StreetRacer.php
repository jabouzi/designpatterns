<?php

include_once('Vehicule.php');
include_once('GoByDrivingAlgorithm.php');

class StreetRacer extends Vehicule
{
	function __construct()
	{
		$this->setGoAlgorithm(new GoByDrivingAlgorithm());
	}
}
