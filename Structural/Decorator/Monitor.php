<?php

namespace DesignPatterns\Structural\Decorator;

class Monitor extends ComponentDecorator
{
    public $computer;
    
    function __construct($computer)
    {
        $this->computer = $computer;
    }
    
    public function description()
    {
        //var_dump(2 . ' ' . $this->computer->description());
        return $this->computer->description() . " and a Monitor";
    }
}
