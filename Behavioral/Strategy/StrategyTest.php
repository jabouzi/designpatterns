<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\DateComparator as DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator as IdComparator;
use DesignPatterns\Behavioral\Strategy\ObjectCollection as ObjectCollection;
use DesignPatterns\Behavioral\Strategy\Strategy\ComparatorInterface as ComparatorInterface;


/**
 * Tests for Strategy pattern
 */
class StrategyTest
{	
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function getIdCollection()
    {        
        return array(array('id' => 2), array('id' => 1), array('id' => 3));
    }

    public function getDateCollection()
    {
        return array(array('date' => '2014-03-03'), array('date' => '2015-03-02'), array('date' => '2013-03-01'));
    }

    /**
     * @dataProvider getIdCollection
     */
    public function testIdComparator($collection, $expected = null)
    {
        $obj = new ObjectCollection($collection);
        $obj->setComparator(new IdComparator());
        $elements = $obj->sort();
        
        return $elements;
    }

    /**
     * @dataProvider getDateCollection
     */
    public function testDateComparator($collection, $expected = null)
    {
        $obj = new ObjectCollection($collection);
        $obj->setComparator(new DateComparator());
        $elements = $obj->sort();
        
        return $elements;
    }
}

define('BASE_PATH', '/Users/skanderjabouzi/Development/DesignPatternsAndOOP');

spl_autoload_register(__NAMESPACE__.'\StrategyTest::load');

$test = new StrategyTest();
print_r($test->testIdComparator($test->getIdCollection()));
print_r($test->testDateComparator($test->getDateCollection()));
