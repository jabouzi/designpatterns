<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class PurchasePower 
{
    protected static $BASE = 500;
    protected $successor;

    public function setSuccessor(PurchasePower $successor) 
    {
        $this->successor = $successor;
    }

    abstract public function processRequest(PurchaseRequest $request);
}
