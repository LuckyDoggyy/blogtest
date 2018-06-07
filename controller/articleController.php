<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-6
 * Time: 下午2:37
 */

include '../service/pageSkip.php';

$_GET['func']();

function articleContent(){

    echo "show article";

}

function page(){

//    echo $_GET['userId']."<br>".$_GET['pageNum']."<br>".$_GET['pageSize']."<br>";

    articlesDisplay(getArticlesByPage($_GET['pageNum'], $_GET['pageSize'], $_GET['userId']));

}
