<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class PresidentPPower extends PurchasePower {
    
    protected static $ALLOWABLE;
    
    public function __construct()
    {
		 self::$ALLOWABLE = 60 * parent::$BASE;
	}

    public function processRequest(PurchaseRequest $request) 
    {
        if ($request->getAmount() < self::$ALLOWABLE) 
        {
            echo("President will approve $" . $request->getAmount());
        } 
        else
        {
            echo( "Your request for $" . $request->getAmount() . " needs a board meeting!");
        }
    }
}
