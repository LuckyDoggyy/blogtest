<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-5
 * Time: 上午9:49
 */


function articlesCount($userId){

    $dbh = new PDO('mysql:host=127.0.0.1;dbname=blog','root','111111');
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh -> exec('set names utf8');

    $sql = 'select count(*) from articles where userid = :userid';

    $stmt = $dbh -> prepare($sql);

    $stmt -> execute(array(':userid' => $userId));

    $row = $stmt -> fetch(PDO::FETCH_ASSOC);

    return (int)$row['count(*)'];
}

function getArticlesByPage($pageNum, $pageSize, $userId){

    $dbh = new PDO('mysql:host=127.0.0.1;dbname=blog','root','111111');
    $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh -> exec('set names utf8');

    $startPos = ($pageNum - 1) * $pageSize;

    $sql = 'select * from articles where userid = :userid limit '.$startPos.','.$pageSize;

    $stmt = $dbh -> prepare($sql);



    $stmt -> execute(array(':userid' => $userId));

    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    $dbh = null;

    return $results;

}

function articlesDisplay($contents){

    foreach($contents as $content){

        echo "<div id='".$content['title']."'   style='align:left;'>";
        echo date('Y-m-d',strtotime($content['create_time']))."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='/controller/articleController.php?func=articleContent&id=".$content['id']."'>".$content['title']."</a>";
        echo "<div align='left'>".$content['content']."</div>";
        echo "<div align='left'>".$content['create_time']."</div>";
        echo "</div>";

    }

}