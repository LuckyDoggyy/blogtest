<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homepage</title>
</head>
<body>
<br>
<?php

session_start();

echo $_SESSION['username'];

?>
<a href="logout.php">退出</a>



</body>
</html>