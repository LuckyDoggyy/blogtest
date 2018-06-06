<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-4
 * Time: 下午8:37
 */
session_start();

phpinfo();

$_SESSION['username'] = 'xuxyu';

$sessionId = session_id();

echo $sessionId;

/*$redis = new Redis();
$redis -> connect('127.0.0.1', 6379);*/

/*$username = $redis -> get("PHPREDIS_SESSION:".$sessionId);*/




//echo "Server is running: ".$redis->ping();