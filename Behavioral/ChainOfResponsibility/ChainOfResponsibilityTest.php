<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

use DesignPatterns\Behavioral\ChainOfResponsibility\DirectorPPower as DirectorPPower;
use DesignPatterns\Behavioral\ChainOfResponsibility\ManagerPPower as ManagerPPower;
use DesignPatterns\Behavioral\ChainOfResponsibility\PresidentPPower as PresidentPPower;
use DesignPatterns\Behavioral\ChainOfResponsibility\PurchasePower as PurchasePower;
use DesignPatterns\Behavioral\ChainOfResponsibility\PurchaseRequest as PurchaseRequest;
use DesignPatterns\Behavioral\ChainOfResponsibility\VicePresidentPPower as VicePresidentPPower;

class ChainOfResponsibilityTest 
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function test($amount) {
        $manager = new ManagerPPower();
        $director = new DirectorPPower();
        $vp = new VicePresidentPPower();
        $president = new PresidentPPower();
        $manager->setSuccessor($director);
        $director->setSuccessor($vp);
        $vp->setSuccessor($president);
      
        $manager->processRequest(new PurchaseRequest($amount, "General"));
    }
}

define('BASE_PATH', str_replace('/DesignPatterns/Behavioral/ChainOfResponsibility', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\ChainOfResponsibilityTest::load');

$chainOfResponsibilityTest = new ChainOfResponsibilityTest();
$chainOfResponsibilityTest->test(40000);
echo PHP_EOL;
