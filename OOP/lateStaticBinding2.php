<?php

class Vehicle {
    protected static $name = 'This is a Vehicle';

    public static function what_vehicle() {
        echo get_called_class()."\n";                
        echo self::$name."\n";
    }
}

class Sedan extends Vehicle {
    protected static $name = 'This is a Sedan';
}

Sedan::what_vehicle();


class Vehicle2 {
    protected static $name = 'This is a Vehicle';

    public static function what_vehicle() {
        echo get_called_class()."\n";        
        echo static::$name."\n";
    }
}

class Sedan2 extends Vehicle2 {
    protected static $name = 'This is a Sedan';
}

Sedan2::what_vehicle();


class singleton 
{
	public static $instance;
	
	private function __construct() {
		echo 'Contruct of singleton class called'."\n";
	}
	
	public static function get_instance() {
		if ( !static::$instance instanceof static)
		{
			static::$instance = new static();
		}
		
		return static::$instance;
	}
	
	public function test () {
		echo 'test function called'."\n";
	}
}

class B extends singleton {
	
	public static $instance;
	
	protected function __construct() {
		echo 'Construct of Class B called'."\n";
	}
	
	//public static function get_class_name  () {
		//return __CLASS__;
	//}
}

singleton::get_instance()->test();
B::get_instance()->test();
B::get_instance()->test();

