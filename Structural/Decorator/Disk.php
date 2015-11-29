<?php

namespace DesignPatterns\Structural\Decorator;

class Disk extends Computer
{
    public $computer;

    function __construct($computer)
    {
        $this->computer = $computer;
    }

    public function description()
    {
        //var_dump(1 . ' ' . $this->computer->description());
        return $this->computer->description() . " and a disk";
    }
}
