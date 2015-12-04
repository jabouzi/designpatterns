<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class PurchaseRequest 
{
    private $amount;
    private $purpose;

    public function __construct($amount, $purpose) {
        $this->amount = $amount;
        $this->purpose = $purpose;
    }

    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amt)  {
        $this->amount = $amt;
    }

    public function getPurpose() {
        return $this->purpose;
    }
    public function setPurpose($reason) {
        $this->purpose = $reason;
    }
}
