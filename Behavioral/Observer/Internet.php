<?php

namespace DesignPatterns\Behavioral\Observer;

class Internet implements Observer 
{
   public function update($interest) 
   {
		echo("Internet: Interest Rate updated, new Rate is: " . $interest);
		echo "\n";
   }
}
