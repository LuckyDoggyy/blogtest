<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homepage</title>
</head>
<body>
Login success.
<br>
<?php
//session_start();
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$sessionId = session_id();
echo $sessionId."<br>";
$user = $redis -> get('PHPREDIS_SESSION:'.$sessionId);
//echo $redis -> ping()."\n";
echo 'Welcome in ' .$user;

?>

</body>
</html>