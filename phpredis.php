<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-4
 * Time: 下午8:37
 */

$redis = new Redis();
$redis -> connect('127.0.0.1', 6379);
echo "Server is running: ".$redis->ping();