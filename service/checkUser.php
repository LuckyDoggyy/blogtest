<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-5
 * Time: 上午10:07
 */

function checkUser($username, $password){

    $dbh = new PDO('mysql:host=localhost;dbname=blog','root','111111');
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh -> exec('set names utf8');

    $sql = 'select * from users where username = :username';

    $stmt = $dbh->prepare($sql);

    $stmt -> execute(array(':username'=>$username));

    $res =  $stmt->fetch(PDO::FETCH_ASSOC);

    echo $res;

    if(empty($res['password'])) {

        return -1;

    } elseif($res['password'] != $password){

        return -2;

    } else {

        return 1;

    }

}