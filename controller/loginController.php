<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-5-31
 * Time: 上午11:13
 */

session_start();

include '../service/registerService.php';

header("Content-type:text/html;charset=utf-8");

$username = $_POST['username'];

$password = $_POST['password'];

if ( !empty($_POST['loginBtn']) ) {

    $status = checkUser($username, $password);

    if ($status == -2) {

        pageSkip('../login.html','Wrong password.');

    } elseif($status == -1) {

        pageSkip('../login.html','There is no this user.');

    } else {

        $_SESSION['username'] = $username;

        $_SESSION['password'] = $password;

        $_SESSION['userid'] = $status;

        echo $_SESSION['username']."<br>";

        echo $_SESSION['password']."<br>";

        echo $_SESSION['userid']."<br>";

        pageSkip("../homepage.php","Login successful.");


    }

} elseif (!empty($_POST['regBtn'])) {

    if (addUser($username, $password)) {

        pageSkip('../login.html','Register successful.');

    } else {

        pageSkip('../login.html','Register failed. Username has been registered.');

    }
}


function pageSkip($page, $mes){

    echo "
       <script>
       window.alert('$mes');
       window.location.href='$page';
       </script>
    ";

}