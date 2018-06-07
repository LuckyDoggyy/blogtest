<?php
session_start();
include './service/pageSkip.php';
$username = $_SESSION['username'];
$userId = $_SESSION['userid'];

$pageSize = 3;

$pageNum = 1;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $username; ?>'s homepage</title>
    <script src="./jquery-3.2.0.min.js"></script>

</head>
<body>
<br>
<a href="personInformation.php"><?php echo $username; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php">退出</a>

<br>

<a href="www.baidu.com">主站</a>&nbsp;&nbsp;
<a href="homepage.php">首页</a>&nbsp;&nbsp;

<a href=""></a>
<br>
<div id="articles" style="width:70%;align-items:left;">
    <?php

    $contents = getArticlesByPage($pageNum, $pageSize, $userId);

    articlesDisplay($contents);

    ?>
</div>
<div id="pageBar">
    <ul>
        <?php

        $articlesCount = articlesCount($_SESSION['userid']);

        $pageSum = (int)($articlesCount / $pageSize + 1);

        for ($i = 1; $i <= $pageSum; $i++) {

            echo <<<EOT
        <a id="$i" href='javascript:void(0)' onclick="skipToPage($i)">$i</a>&nbsp;&nbsp;
EOT;
        }

        ?>
    </ul>
</div>
<script>

    var pageSize = <?php echo $pageSize ?>;
    var userId = <?php echo $userId ?>;

    function skipToPage(obj) {
        $.get('/controller/articleController.php?func=page&pageNum=' + obj + '&pageSize=' + pageSize + '&userId=' + userId,
            function(result){ window.alert(result); $('#articles').empty(); $('#articles').append(result); })
    }
</script>
</body>
</html>