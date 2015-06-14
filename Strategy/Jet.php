<?php

include_once('Vehicule.php');
include_once('GoByFlyingFastAlgorithm.php');

class Jet extends Vehicule
{
	function __construct()
	{
		$this->setGoAlgorithm(new GoByFlyingFastAlgorithm());
	}
}
