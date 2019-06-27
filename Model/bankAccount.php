<?php

class BankAccount {

	private $owner;
	private $balance;
	private $intrestRates;
	private $currency;
	protected static $objCreated;
	private const BANK_NAME = 'Oseille Bank - حميض Bank - щавель Bank';

	/**
	 * Default constructor
	 */
	public function __construct($newOwner, $newBalance, $newInterestRates, $newCurrency) {
		$this->owner = $newOwner;
		$this->balance = $newBalance;
		$this->interestRates = $newInterestRates;
		$this->currency = $newCurrency;
		self::$objCreated++;
	}

	/**
	 * @param $amount
	 */
	public function credit($amount) {
		$this->balance += $amount;
	}

	/**
	 * @param $amount
	 */
	public function debit($amount) {
		$this->balance -= $amount;
	}

	/**
		* @param setteurs
		*/

	public function setOwner($newOwner) {
		$this->owner = $newOwner;
	}

	public function setBalance($newBalance) {
		$this->balance = $newBalance;
	}

	public function setInterestRates($newInterestRates) {
		$this->interestRates = $newInterestRates;
	}

	public function setCurrency($newCurrency) {
		$this->currency = $newCurrency;
	}

	/**
		* @param getteurs
		*/

	public function getOwner() {
		return $this->owner;
	}

	public function getBalance() {
		return $this->balance;
	}

	public function getInterestRates() {
		return $this->interestRates;
	}

	public function getCurrency() {
		return $this->currency;
	}

	public static function getNbObjsCreated() {
		return self::$objCreated;
	}

	public function getBankName() {
		return self::BANK_NAME;
	}

}
