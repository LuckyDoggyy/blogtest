<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-5-31
 * Time: 下午12:04
 */

include 'checkUser.php';

function addUser($username, $password)
{

    if( checkUser($username, $password) == -1){

        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '111111');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec('set names utf8');
        $sql = "insert into users ( username, password) values (:username, :password)";

        $stmt = $dbh->prepare($sql);

        return (int)$stmt->execute(array(':username'=>$username,':password'=>$password));

    }else{

        return -2;

    }

}

