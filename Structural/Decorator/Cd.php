<?php

namespace DesignPatterns\Structural\Decorator;

class Cd extends Computer
{
    public $computer;

    function __construct($computer)
    {
        $this->computer = $computer;
    }

    public function description()
    {
        //var_dump(3 . ' ' . $this->computer->description());
        return $this->computer->description() . " and a CD";
    }
}