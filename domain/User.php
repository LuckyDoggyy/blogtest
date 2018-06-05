<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-5-31
 * Time: 上午11:28
 */

class User
{
    private $username = "";
    private $password = "";

    public function __construct($username, $password){
        $this -> username = $username;
        $this -> password = $password;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }


}