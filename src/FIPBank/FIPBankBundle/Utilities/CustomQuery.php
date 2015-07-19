<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FIPBank\FIPBankBundle\Utilities;

/**
 * Description of CustomQuery
 *
 * @author Flash
 */
class CustomQuery {

    private function __construct() {
        
    }

    public static function getInstance() {
        static $instance = null;

        if ($instance === null) {
            $instance = new CustomQuery();
        }

        return $instance;
    }

    public function customQuery($query) {
        $conn = DBConnection::getInstance()->getConnection();
        $result = $conn->query($query);

        if ($result) {
            return $result;
        } else {

            die($conn->error);
        }
    }

    public function customPrepare($query, $varType, $index) {
        $conn = DBConnection::getInstance()->getConnection();
        $stat = $conn->prepare($query);
        $stat->bind_param($varType, $index);

        $stat->execute();
        $result=$stat->get_result();

        if ($result) {
            return $result;
        } else {

            die($conn->error);
        }
    }

}
