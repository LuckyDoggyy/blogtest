<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-4
 * Time: 下午8:37
 */
/*
$dbh = new PDO('mysql:host=127.0.0.1;dbname=blog','root','111111');
$dbh -> setAttribute(PDO::ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh -> exec('set names utf8');

$sql = 'select * from articles';

$stmt = $dbh -> prepare($sql);

$stmt -> execute();

$result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

$dbh = null;*/



$dbh = new PDO('mysql:host=127.0.0.1;dbname=blog','root','111111');
$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh -> exec('set names utf8');

$sql = 'select * from articles where userid = :userid';

$stmt = $dbh -> prepare($sql);

$stmt -> execute(array(':userid'=> 16));

echo $stmt -> fetchAll();

$dbh = null;