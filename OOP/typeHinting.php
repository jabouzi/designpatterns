<?php

class Apple
{
	public $calories = 100; 
}
	
class pet
{
	private $energy;
	
	public function eatApple( Apple $apple )
	{
	   $this->energy += $apple->calories;
	}

	public function getEnergy()
	{
	   return 'Current Energy: ' . $this->energy . '<br>';
	}
}

$jack = new Pet( 'Jack' );
$apple = new Apple();
$jack->eatApple( new Apple() );
echo $jack->getEnergy();
