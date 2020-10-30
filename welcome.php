<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="static/css/elect.css">
    <script src="static/js/jquery-3.3.1.js"></script>
    <style>
        /**{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .box{
            width: 100vw;
            height: 100vh;
            background: linear-gradient(to bottom, rgb(72, 126, 255) 0, #9a8bff 100%);
        }
        .box h1{
           text-align: center;
            line-height: 90vh;
            color: #fff;
        }*/
    </style>
</head>
<body>
<div id="box">
    <img src="static/images/a77.png" alt="" class="img">

    <div id="box1">
        <div id="demo1">
            <div class="str2"></div>
            <!--<button type="button" class="moveSwitch1">开始</button>
            <button class="moveSwitch2">结束</button>-->
        </div>
        <div class="demo2">
            <div class="str2_01"></div>
            <div class="str3_01"></div>
            <div class="switch_01"></div>
            <div class="str4_01"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="switch_02"></div>
            <div class="str_AC"></div>
            <div class="string1_01"></div>
            <div class="string2_01"></div>
            <div class="string3_01"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
        <div class="demo3">
            <div class="str2_02"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="str2_AC"></div>
            <div class="switch_03"></div>
            <div class="str4_02"></div>
            <div class="str3_02"></div>
            <div class="switch2_03"></div>
            <div class="string1_02"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
        <div class="demo4">
            <div class="str2_02"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="str2_AC"></div>
            <div class="switch_03"></div>
            <div class="str4_02"></div>
            <div class="str3_02"></div>
            <div class="switch"></div>
            <div class="string1_03"></div>
            <div class="str2_03"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
        <div class="demo5">
            <div class="str2_02"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="str2_AC"></div>
            <div class="switch_03"></div>
            <div class="str4_02"></div>
            <div class="str3_02"></div>
            <div class="switch2_03"></div>
            <div class="string1_05"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
        <div class="demo6">
            <div class="str2_02"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="str2_AC"></div>
            <div class="switch_03"></div>
            <div class="str4_02"></div>
            <div class="str3_02"></div>
            <div class="switch2_03"></div>
            <div class="string1_05"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
        <div class="demo7">
            <div class="str2_02"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="str2_AC"></div>
            <div class="switch_03"></div>
            <div class="str4_02"></div>
            <div class="str3_02"></div>
            <div class="switch2_03"></div>
            <div class="string1_05"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
        <div class="demo8">
            <div class="str2_02"></div>
            <img src="static/images/icon_close.png" alt="" class="icon_close">
            <div class="str2_AC"></div>
            <div class="switch_03"></div>
            <div class="str4_02"></div>
            <div class="str3_02"></div>
            <div class="switch2_03"></div>
            <div class="string1_05"></div>
            <!--            <button onclick="moveSwitch()">开始</button>-->
        </div>
    </div>

</div>
</body>
<script>
    $(".moveSwitch1").click(function (){
        this.style.display='none';
        $(".switch").eq(0).css({
            "transform": "rotate(0)",
            "background":"#f52d2d",
            "transition":"background 0.6s",
        });
        $(".string1").css({
            "transition-duration":"0.7s",
            "background":"#f52d2d"
        });
        $(".str2").css({
            "transition-duration":"0.6s",
            "background":"#f52d2d"
        });
        $(".str3").hide(10);

    })
</script>
</html>
