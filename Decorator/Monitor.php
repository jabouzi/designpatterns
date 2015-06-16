<?php

include_once('Computer.php');

class Monitor extends Computer
{
	public $computer;

	function __construct($computer)
	{
		$this->computer = $computer;
	}

	public function description()
	{
		return $this->computer->description() . " and a Monitor";
	}
}
