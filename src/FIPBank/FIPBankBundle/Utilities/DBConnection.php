<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FIPBank\FIPBankBundle\Utilities;

/**
 * Description of DBConnection
 *
 * @author Flash
 */
class DBConnection {

    //prevent instantiating DBConnection
    private function __construct() {
        
    }

    public static function getInstance() {
        static $instance = null;
        if ($instance === null) {
            $instance = new DBConnection();
        }
        return $instance;
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

    public function getConnection() {

        $connection = new \mysqli('localhost', 'root', '0713899213', 'fibank');

        if ($connection) {
            return $connection;
        } else {
            die($connection->error);
        }
    }

    public function closeConnection($conn) {
        $conn->close();
    }

}
