<?php

namespace DesignPatterns\Structural\Facade;

class SimpleProductFacade
{
	public $difficultProduct;

	public function __construct()
	{
		$this->difficultProduct = new DifficultProduct();
	}

	public function setName($n)
	{
		$chars = str_split($n);

		if(count($chars) > 0){
			$this->difficultProduct->setFirstNameCharacter($chars[0]);
		}

		if(count($chars) > 1){
			$this->difficultProduct->setSecondNameCharacter($chars[1]);
		}

		if(count($chars) > 2){
			$this->difficultProduct->setThirdNameCharacter($chars[2]);
		}

		if(count($chars) > 3){
			$this->difficultProduct->setFourthNameCharacter($chars[3]);
		}

		if(count($chars) > 4){
			$this->difficultProduct->setFifthNameCharacter($chars[4]);
		}

		if(count($chars) > 5){
			$this->difficultProduct->setSixthNameCharacter($chars[5]);
		}

		if(count($chars) > 6){
			$this->difficultProduct->setSeventhNameCharacter($chars[6]);
		}
	}

	public function getName()
	{
		return $this->difficultProduct->getName();
	}
}
