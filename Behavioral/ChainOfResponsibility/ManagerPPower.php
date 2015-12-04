<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class ManagerPPower extends PurchasePower 
{
    protected static $ALLOWABLE;
    
    public function __construct()
    {
		 self::$ALLOWABLE = 10 * parent::$BASE;
	}

    public function processRequest(PurchaseRequest $request) 
    {
        if ($request->getAmount() < self::$ALLOWABLE) 
        {
            echo("Manager will approve $" . $request->getAmount());
        } 
        else if ($this->successor != null) 
        {
            $this->successor->processRequest($request);
        }
    }
}

