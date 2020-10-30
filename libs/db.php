<?php
    header("Content-Type:text/html;charset=utf-8");
    $db=new mysqli("localhost","root","","elect");
    if($db->connect_error){
        echo "数据库连接失败<br>".$db->connect_error;
        exit();
}
$db->query("SET NAMES UTF8");
