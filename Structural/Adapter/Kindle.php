<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Kindle is a concrete electronic book
 */
class Kindle implements EBookInterface
{
	public $pageNumber;
	
	function __construct()
    {

	}
	
    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
		$this->pageNumber++;
		echo ' Page number : '.$this->pageNumber;
		echo PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function pressStart()
    {
		$this->pageNumber = 1;
		echo 'eBook opened';
		echo ' Page number : '.$this->pageNumber;
		echo PHP_EOL;
    }
}
