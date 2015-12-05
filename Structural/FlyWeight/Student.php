<?php

namespace DesignPatterns\Structural\FlyWeight;

class Student 
{
	public $name;
	public $id;
	public $score;
	public $averageScore;

	public function __construct($a)
	{
		$this->averageScore = $a;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setScore($score)
	{
		$this->score = $score;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getID()
	{
	  return $this->id;
	}

	public function getScore()
	{
	  return $this->score;
	}

	public function getStanding()
	{
		return (((double) $this->score) / $this->averageScore - 1.0) * 100.0;
	}
}
