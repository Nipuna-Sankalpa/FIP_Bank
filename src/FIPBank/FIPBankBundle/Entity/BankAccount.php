<?php

namespace FIPBank\FIPBankBundle\Entity;

class BankAccount {

    private $userId;
    private $accountNumber;
    private $accountBalance;
    private $createdBy;
    private $accountType;

    function __construct($userId, $accountNumber, $accountBalance, $createdBy, $accountType) {
        $this->userId = $userId;
        $this->accountNumber = $accountNumber;
        $this->accountBalance = $accountBalance;
        $this->createdBy = $createdBy;
        $this->accountType = $accountType;
    }

    function getUserId() {
        return $this->userId;
    }

    function getAccountNumber() {
        return $this->accountNumber;
    }

    function getAccountBalance() {
        return $this->accountBalance;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }

    function getAccountType() {
        return $this->accountType;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    function setAccountBalance($accountBalance) {
        $this->accountBalance = $accountBalance;
    }

    function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }

    function setAccountType($accountType) {
        $this->accountType = $accountType;
    }

}
