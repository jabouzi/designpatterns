<?php

class Pet
{
	public function __get( $name )
	{
	   echo $name . ' property does not exist. <br>'."\n";
	}

	public function __set( $name, $value )
	{
	   echo $name . ' property can not be set to ' . $value . ' as it does not exist. <br>'."\n";
	}

	public function __call( $name, $params )
	{
	   echo $name . ' method does not exist';
	   print_r( $params );
	   echo '<br>'."\n";
	}

	public function __toString()
	{
	   return 'The name of this object is ' . $this->petName . '<br>'."\n";
	}

	public function __clone()
	{
	   echo 'You have created a clone of ' . $this->petName . '<br>'."\n";
	}

	public function __invoke()
	{
	   echo 'You can not run this object as a method. <br>'."\n";
	}

	public function __destruct()
	{
	   echo $this->petName . ' was destroyed.<br>'."\n";
	}
}

$jack = new Pet( 'Jack' );
$jack->foo;
$jack->foo = 5;
$jack->foo( 5, 10, 'Foo' );
$clone = clone $jack;
$jack();
echo $jack;

