<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-5-31
 * Time: 上午11:13
 */

//ini_set('session.save_handler','redis');
//ini_set('session_save_path','tcp://127.0.0.1');

session_start();

include '../service/registerService.php';
include '../service/pageSkip.php';

header("Content-type:text/html;charset=utf-8");

$username = $_POST['username'];

$password = $_POST['password'];

if ( !empty($_POST['loginBtn']) ) {

    if (checkUser($username, $password) == 1) {

        $_SESSION['username'] = $username;

        $_SESSION['password'] = $password;

        echo $_SESSION['username']."<br>";

        echo $_SESSION['password']."<br>";

        pageSkip("../homepage.php","Login successful.");

    } elseif(checkUser($username, $password) == -1) {

        pageSkip('../login.html','There is no this user.');

    } else{

        pageSkip('../login.html','Wrong password.');

    }

} elseif (!empty($_POST['regBtn'])) {

    if (addUser($username, $password) == 1) {

        pageSkip('../login.html','Register successful.');

    } else {

        pageSkip('../login.html','Register failed. Username has been registered.');

    }
}