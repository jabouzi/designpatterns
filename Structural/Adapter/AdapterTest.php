<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\EBookAdapter as EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle as Kindle;
use DesignPatterns\Structural\Adapter\PaperBookInterface as PaperBookInterface;
use DesignPatterns\Structural\Adapter\Book as Book;


class AdapterTest
{
	public static function load($class)
	{
		$filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
		include($filename);
	}

    public function test()
    {
		$book = new Book();
        $book->open();
        $book->turnPage();
        $book->turnPage();
        $book->turnPage();
        $book->turnPage();
        $book->turnPage();
        
        $kindle = new Kindle();
        $kindle->pressStart();
        $kindle->pressNext();
        $kindle->pressNext();
        $kindle->pressNext();
        
        $kindleAdapter = new EBookAdapter($kindle);
        $kindleAdapter->open();
        $kindleAdapter->turnPage();
        $kindleAdapter->turnPage();
        $kindleAdapter->turnPage();
        $kindleAdapter->turnPage();
        $kindleAdapter->turnPage();
        $kindleAdapter->turnPage();
    }
}

define('BASE_PATH', str_replace('/DesignPatterns/Structural/Adapter', '', __DIR__));

spl_autoload_register(__NAMESPACE__.'\AdapterTest::load');

$adapterTest = new AdapterTest();
$adapterTest->test();
