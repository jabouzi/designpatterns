<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class VicePresidentPPower extends PurchasePower {

    protected static $ALLOWABLE;
    
    public function __construct()
    {
		 self::$ALLOWABLE = 40 * parent::$BASE;
	}

    public function processRequest(PurchaseRequest $request) 
    {
        if ($request->getAmount() < self::$ALLOWABLE) 
        {
            echo("Vice President will approve $" . $request->getAmount());
        } 
        else if ($this->successor != null) 
        {
            $this->successor->processRequest($request);
        }
    }
}
