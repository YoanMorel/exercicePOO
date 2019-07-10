<?php

class BankAccount {

	private 					$owner;
	private 					$balance;
	private 					$interestRates;
	private 					$currency;
	protected static 	$objCreated;
	private const 		BANK_NAME = 'OseilleBank - DoughBank - حميضBank - щавельBank';

	/**
	 * Default constructor
	 */
	public function __construct($newOwner, $newBalance, $newInterestRates, $newCurrency) {
		$this->setOwner($newOwner);
		$this->setBalance($newBalance);
		$this->setInterestRates($newInterestRates);
		$this->setCurrency($newCurrency);
		self::$objCreated++;
	}

	/**
	 * @param int $amount
	 */
	public function credit($amount) {
		$this->balance += $amount;
	}

	/**
	 * @param int $amount
	 */
	public function debit($amount) {
		$this->balance -= $amount;
	}

	/**
		* @param setters
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
