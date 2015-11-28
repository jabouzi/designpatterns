<?php

//~ namespace DesignPatterns\Behavioral\Strategy;

//~ use DesignPatterns\Behavioral\Strategy\DateComparator;
//~ use DesignPatterns\Behavioral\Strategy\IdComparator;
//~ use DesignPatterns\Behavioral\Strategy\ObjectCollection;
//~ use DesignPatterns\Behavioral\Strategy\Strategy;

include 'ComparatorInterface.php';
include 'ObjectCollection.php';
include 'IdComparator.php';
include 'DateComparator.php';

/**
 * Tests for Strategy pattern
 */
class StrategyTest /*extends \PHPUnit_Framework_TestCase*/
{

    public function getIdCollection()
    {
        //~ return array(
            //~ array(
                //~ array(array('id' => 2), array('id' => 1), array('id' => 3)),
                //~ array('id' => 1)
            //~ ),
            //~ array(
                //~ array(array('id' => 3), array('id' => 2), array('id' => 1)),
                //~ array('id' => 1)
            //~ ),
        //~ );
        
        return array(array('id' => 2), array('id' => 1), array('id' => 3));
    }

    public function getDateCollection()
    {
        //~ return array(
            //~ array(
                //~ array(array('date' => '2014-03-03'), array('date' => '2015-03-02'), array('date' => '2013-03-01')),
                //~ array('date' => '2013-03-01')
            //~ ),
            //~ array(
                //~ array(array('date' => '2014-02-03'), array('date' => '2013-02-01'), array('date' => '2015-02-02')),
                //~ array('date' => '2013-02-01')
            //~ ),
        //~ );
        
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

        //~ $firstElement = array_shift($elements);
        //~ $this->assertEquals($expected, $firstElement);
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

        //~ $firstElement = array_shift($elements);
        //~ $this->assertEquals($expected, $firstElement);
    }
}

$test = new StrategyTest();
print_r($test->testIdComparator($test->getIdCollection()));
print_r($test->testDateComparator($test->getDateCollection()));
