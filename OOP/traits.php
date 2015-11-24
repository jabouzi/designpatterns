<?php

// Set of traits that we can share with classes.
trait EngineTools {
	// Convert engine temperature to Celsius
	function currentTempC() {
		return ($this->engineTemp - 32) * (5/9);
	}
}

// Our Plane uses the tools for temperature conversion
class Plane {
	use EngineTools;
	
	private $engineTemp;
	
	function __construct() {
		$this->startPlane();
	}
	
	private function startPlane() {
		$this->engineTemp = 210;
	}
	
	private function fly() {
		// Fly
	}
}

// Car uses same engine tools for temperature conversion
class Car {
	use EngineTools;
	
	private $engineTemp;
	
	function __construct() {
		$this->startCar();
	}
	
	private function startCar() {
		$this->engineTemp = 230;
	}
	
	private function drive() {
		// Drive
	}
}

$plane = new Plane();
$car = new Car();

echo $plane->currentTempC() . "<br/>";
echo $car->currentTempC() . "<br/>";
