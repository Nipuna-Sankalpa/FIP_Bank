<?php
namespace FIPBank\UserBundle\Entity;


use FOS\UserBundle\Entity\User as BaseUser;


/**
 * User
 */

class User extends BaseUser
{
    protected $id;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}