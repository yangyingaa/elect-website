<?php

$image=imagecreatetruecolor(200,50);
//颜色填充
//1.创建一个颜色
function getColor($mode="l"){
    global $image;
    if($mode==="l"){
        return imagecolorallocate($image,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
    }else{
        return imagecolorallocate($image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
    }
}
//2.填充
imagefill($image,0,0,getColor());
for($i=0;$i<100;$i++){
    imagesetpixel($image,mt_rand(0,200),mt_rand(0,50),getColor("d"));
}
for($i=0;$i<20;$i++){
    imageline($image,mt_rand(0,200),mt_rand(0,50),mt_rand(0,200),mt_rand(0,50),getColor("d"));
}
$str="qwertyuipkjhgfdsazxcvbnmQWERTYUPLKJHGFDSAZXCVBNM23456789";
$len = strlen($str);
session_start();
$word="";
for($i=0;$i<5;$i++){
    $character=substr($str,mt_rand(0,$len - 1),1);
    $word.=$character;
    imagettftext($image,30,mt_rand(-30,30),$i*40+mt_rand(0,20),mt_rand(40,50),getColor("d"),"static/fonts/msyhbd.ttc",$character);
}
$_SESSION["code"]=$word;
//3.生成一张图片
header("Content-Type:image/png");
imagepng($image);

//strlen() 获取字符串长度
//substr() 获取某个位置固定字符串的长度
