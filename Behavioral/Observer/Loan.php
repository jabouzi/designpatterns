<?php

namespace DesignPatterns\Behavioral\Observer;

class Loan implements Subject 
{
	private $observers = array();
	private $type;
	private $interest;
	private $bank;

	public function __conctruct($type, $interest, $bank) 
	{
		$this->type = $type;
		$this->interest = $interest;
		$this->bank = $bank;
	}

	public function getInterest() 
	{
		return $this->interest;
	}

	public function setInterest($interest) 
	{
		$this->interest = $interest;
		$this->notifyObservers();
	}

	public function getBank() 
	{
		return $this->bank;
	}

	public function getType() 
	{
		return $this->type;
	}

	public function registerObserver(Observer $observer) 
	{
		$this->observers[] = $observer;

	}

	public function removeObserver(Observer $observer) 
	{
		$key = array_search($observer, $this->observers);
		unset($this->observers[$key]);
	}

	public function notifyObservers() 
	{
		foreach ($this->observers as $observer) 
		{
			echo("Notifying Observers on change in Loan interest rate\n");
			$observer->update($this->interest);
		}
	}
}
