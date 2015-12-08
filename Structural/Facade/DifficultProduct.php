<?php

namespace DesignPatterns\Structural\Facade;

class DifficultProduct
{
	public $nameChars = array();

	public function __construct()
	{
	}

	public function setFirstNameCharacter($c)
	{
		$this->nameChars[0] = $c;
	}

	public function setSecondNameCharacter($c)
	{
		$this->nameChars[1] = $c;
	}

	public function setThirdNameCharacter($c)
	{
		$this->nameChars[2] = $c;
	}

	public function setFourthNameCharacter($c)
	{
		$this->nameChars[3] = $c;
	}

	public function setFifthNameCharacter($c)
	{
		$this->nameChars[4] = $c;
	}

	public function setSixthNameCharacter($c)
	{
		$this->nameChars[5] = $c;
	}

	public function setSeventhNameCharacter($c)
	{
		$this->nameChars[6] = $c;
	}

	public function getName()
	{
		return implode('', $this->nameChars);
	}
}
