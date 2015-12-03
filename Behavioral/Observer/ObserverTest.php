<?php

namespace DesignPatterns\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\Observer as Observer;
use DesignPatterns\Behavioral\Observer\Subject as Subject;
use DesignPatterns\Behavioral\Observer\Newspaper as Newspaper;
use DesignPatterns\Behavioral\Observer\Internet as Internet;
use DesignPatterns\Behavioral\Observer\Loan as Loan;

class ObserverTest 
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

	public function test() 
	{
		// this will maintain all loans information
		$printMedia = new Newspaper();
		$onlineMedia = new Internet();
		$personalLoan = new Loan("Personal Loan", 12.5,  "Standard Charterd");
		$personalLoan->registerObserver($printMedia);
		$personalLoan->registerObserver($onlineMedia);
		$personalLoan->setInterest(3.5);

	}
}

define('BASE_PATH', str_replace('/DesignPatterns/Behavioral/Observer', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\ObserverTest::load');

$observerTest = new ObserverTest();
$observerTest->test();
