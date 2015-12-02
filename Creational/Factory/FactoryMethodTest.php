<?php

namespace DesignPatterns\Creational\Factory;

use DesignPatterns\Creational\Factory\FactoryMethod as FactoryMethod;
use DesignPatterns\Creational\Factory\VehicleInterface as VehicleInterface;
use DesignPatterns\Creational\Factory\GermanFactory as GermanFactory;
use DesignPatterns\Creational\Factory\ItalianFactory as ItalianFactory;
use DesignPatterns\Creational\Factory\Ferrari as Ferrari;
use DesignPatterns\Creational\Factory\Porsche as Porsche;

/**
 * FactoryMethodTest tests the factory method pattern
 */
class FactoryMethodTest
{

    protected $type = array(
        FactoryMethod::CHEAP,
        FactoryMethod::FAST
    );
    
    
    public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function getShop()
    {
        return array(
            new GermanFactory(),
            new ItalianFactory()
        );
    }

    /**
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
    {
        // this test method acts as a client for the factory. We don't care
        // about the factory, all we know is it can produce vehicle
        foreach ($this->type as $oneType) {
            $vehicle = $shop->create($oneType);
            var_dump($vehicle);
        }
    }

    /**
     * @dataProvider getShop
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType(FactoryMethod $shop)
    {
        $shop->create('spaceship');
    }
}

define('BASE_PATH', str_replace('/DesignPatterns/Creational/Factory', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\FactoryMethodTest::load');

$factoryMethodTest = new FactoryMethodTest();
$shops = $factoryMethodTest->getShop();
foreach($shops as $shop)
{
	$factoryMethodTest->testCreation($shop);
}
