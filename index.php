<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        $msg = "请登录";
        $href = "login.php";
        include "message.php";
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>管理中心</title>
    <link rel="stylesheet" href="static/css/pintuer.css">
    <link rel="stylesheet" href="static/css/admin.css">
    <script src="static/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="static/images/y.jpg" class="radius-circle rotate-hover" height="50" alt=""/>后台管理中心</h1>
    </div>
    <div class="head-l">
        <a class="button button-little bg-red" href="logout.php"><span class="icon-power-off"></span> 退出登录</a></div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul style="display:block;overflow-y: scroll">
        <li><a href="pass.php" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="welcome.php" target="right"><span class="icon-caret-right"></span>35KV高压柜</a>
            <ul>
                <li><button>合闸准备</button></li>
                <li>合闸按钮</li>
                <li>分闸准备</li>
                <li>分闸按钮</li>
            </ul>
        </li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>变压器</a>
            <ul>
                <li>升压</li>
                <li>降压</li>
            </ul>
        </li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>进线柜</a>
            <ul>
                <li>合闸</li>
                <li>分闸</li>
            </ul>
        </li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>1#出线柜</a>
            <ul>
                <li>合闸</li>
                <li>分闸</li>
            </ul>
        </li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>2#出线柜</a></li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>3#出线柜</a></li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>4#出线柜</a></li>
        <li><a href="" target="right"><span class="icon-caret-right"></span>5#出线柜</a></li>
    </ul>

</div>
<script type="text/javascript">
    $(function () {
        $(".leftnav h2").click(function () {
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        });
        $(".leftnav ul li a").click(function () {
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<!--<ul class="bread">
    <li><a href="welcome.php" target="right" class="icon-home"> 首页</a></li>
</ul>-->
<div class="admin">
    <iframe scrolling="auto" frameborder="0" src="welcome.php" name="right" width="100%" height="100%"></iframe>
</div>

</body>
<script>
    /*$(function (){
        $("div>ul>li").hover(function () {
            $(this).children().stop().slideToggle();
        })
    })*/
</script>
</html>

