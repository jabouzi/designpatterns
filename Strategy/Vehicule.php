<?php

abstract class Vehicule
{
	private $goAlgorithm;
	
	function __construct()
	{
		
	}
	
	public function setGoAlgorithm ($algorithm) 
	{
		$this->goAlgorithm = $algorithm;
	}

	public function go() 
	{
		$this->goAlgorithm->go();
	}
	
}
