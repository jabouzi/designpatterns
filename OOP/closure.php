<?php

$functionReference = function(){
                         echo "anonymous function called\n";
                    };
 
echo $functionReference();

class SimpleClass {
    private $privateData = 2;
}
 
$simpleClosure = function() {
    return $this->privateData;
};
 
$resultClosure = Closure::bind($simpleClosure, new SimpleClass(), 'SimpleClass');

echo $resultClosure()."\n";

$someValue = "sample external data";
$simpleClosure = function() use($someValue) {
    return "Test accessing external value inside closure ".$someValue;
};
echo $simpleClosure()."\n";

$closure = function() {
    echo $this->foo;
};

$context = new \StdClass;
$context->foo = "Hello World\n";

// rebinds the closure to the $context object
$boundClosure = $closure->bindTo($context);
$boundClosure();


class Math
{
    function  __construct($a) {
        $this->a =$a;
    }
    //Returns a closure
    function mul()
    {
        //We can't directly use $this inside closure
        $self = $this;
        return function($n) use($self) {
            return $n*$self->a;
        };
    }
}
$math = new Math(5);
$mul = $math->mul();
echo $mul(4)."\n"; //Output : 20

$factorial = function($n) use (&$factorial) {
      if ($n <= 1)
        return 1;
      else
        return $n * $factorial($n - 1);
};
echo $factorial(5); //Output : 120
