<?php

    session_start();
    $code=$_POST['code'];
    if(strtoupper($code)!==strtoupper($_SESSION['code'])){
        $msg="验证码输入错误";
        $href="login.php";
        include "message.php";
        exit();
    }

    include "libs/db.php";
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="SELECT * FROM admin WHERE username='{$username}'";
    $r=$db->query($sql);
    $r=$r->fetch_assoc();
    if($r){
        if($password===$r['password']){
            $msg="登陆成功";
            $href="index.php";
            $_SESSION['login']=$r['username'];
        }else{
            $msg="密码输入错误";
            $href="login.php";
        }
    }else{
        $msg="用户名不存在";
        $href="login.php";
    }
    include "message.php";