<?php

namespace FIPBank\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 */
class User extends BaseUser {

    protected $id;
    protected $role;
    protected $accountNumber;

    function getAccountNumber() {
        return $this->accountNumber;
    }

    function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    function getId() {
        return $this->id;
    }

    function getRole() {
        return $this->role;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRole($role) {
        parent::setRoles(array($role));
    }

    public function __construct() {
        parent::__construct();
        // your own logic
    }

}
