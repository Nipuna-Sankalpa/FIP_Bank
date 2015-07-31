<?php

namespace FIPBank\UserBundle\Entity;

class BankAccount {

    private $userId;
    private $accountNumber;
    private $accountBalance;
    private $createdBy;
    private $accountType;

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
