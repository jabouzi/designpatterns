<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class DirectorPPower extends PurchasePower 
{
    protected static $ALLOWABLE;
    
    public function __construct()
    {
		 self::$ALLOWABLE = 20 * parent::$BASE;
	}

    public function processRequest(PurchaseRequest $request) 
    {
        if ($request->getAmount() < self::$ALLOWABLE) 
        {
            echo("Director will approve $" . $request->getAmount());
        } 
        else if ($this->successor != null) 
        {
            $this->successor->processRequest($request);
        }
    }
}

