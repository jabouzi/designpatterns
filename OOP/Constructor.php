<?php

class Constructor1
{
	
}

class Constructor2
{
	function __construct()
	{
		echo 'Constructor2::__construct()';
		echo PHP_EOL;
	}
	
	function __destruct()
	{
		echo 'Constructor2::__destruct()';
		echo PHP_EOL;
	}
}

class Constructor3
{
	function Constructor3()
	{
		echo 'Constructor3::Constructor3()';
		echo PHP_EOL;
	}
}

$c1 = new Constructor1();
$c2 = new Constructor2();
$c2->__construct();
$c3 = new Constructor3();
$c3->Constructor3();
