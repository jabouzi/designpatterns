<?php

namespace DesignPatterns\Behavioral\Observer;


class Newspaper implements Observer 
{
	public function update($interest) 
	{
		echo("Newspaper: Interest Rate updated, new Rate is: " . $interest);
		echo "\n";
	}
}
