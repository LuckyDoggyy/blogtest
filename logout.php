<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-6
 * Time: 上午10:31
 */

include './service/pageSkip.php';

session_start();

unset($_SESSION);

pageSkip('login.html','Log out.');

function pageSkip($page, $mes){

    echo "
       <script>
       window.alert('$mes');
       window.location.href='$page';
       </script>
    ";

}