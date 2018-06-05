<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 18-6-5
 * Time: 上午9:49
 */

function pageSkip($page, $mes){

    echo "
       <script>
       window.alert('$mes');
       window.location.href='$page';
       </script>
    ";

}