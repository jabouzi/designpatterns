<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Book is a concrete and standard paper book
 */
class Book implements PaperBookInterface
{
	public $pageNumber;
	
    function __construct()
    {
		
	}
    /**
     * {@inheritdoc}
     */
    public function open()
    {
		$this->pageNumber = 1;
		echo 'Book opened';
		echo ' Page number : '.$this->pageNumber;
		echo PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
		$this->pageNumber++;
		echo ' Page number : '.$this->pageNumber;
		echo PHP_EOL;
    }
}
