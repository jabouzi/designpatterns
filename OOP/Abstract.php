<?php
/*
* A Very simple example to understand why we should use ABSRACT CLASSES.
* This abstract class contains 2 methods : 1 abstract and 1 common methods.
*
*/
abstract class Shape
{
	// Let's assume a shape will always have a base and a height
	protected $base;
	protected $height;

	// This function can be the same for both classes 'Triangle' and 'Rectangle'
	public function setValues($base, $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	// This might be different for each class of shape, because each Surface is calculated by a different formula ( St = b*h/2 and Sr = b*h)
	abstract public function surface();
}

class Triangle extends Shape
{
	// s = b*h/2
	public function surface()
	{
		return round((($this->base) * ($this->height) / 2) , 2);
	}
}

class Rectangle extends Shape
{
	// s = b*h
	public function surface()
	{
		return round((($this->base) * ($this->height)) , 2);
	}
}

abstract class test
{
	public function set()
	{
		echo 'Set method in an abstract class';
		echo "\n";
	}
	
	protected function get()
	{
		echo 'Get method in an abstract class';
		echo "\n";
	}
}

class impTest extends test
{
	
}

$r = new Rectangle();
$r->setValues(15, 3);
echo $r->surface() . "\n"; // echo 45
$t = new Triangle();
$t->setValues(15, 3);
echo $t->surface() . "\n"; // echo 22.5


$test = new impTest();
$test->set();
$test->get(); // PHP Fatal error:  Call to protected method test::get() from context
