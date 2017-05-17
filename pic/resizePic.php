<?php

$imgBehind = '*.png';
$curlPath = dirname(__FILE__);


$fileName = 'pic/';
$pattern = $curlPath.'/'.$imgBehind;
echo $pattern;
$allPic = glob($pattern);
// echo dirname(__FILE__); 
foreach ($allPic  as $k => $v) {
    echo $v;
    echo "<br>";
    resize($v);
}

function resize($param) {
    $filename=$param;
    $per= 0.5;
    list($width, $height)=getimagesize($filename);
    $n_w=$width*$per;
    $n_h=$height*$per;
    $img=imagecreatefrompng($filename);
    $new=imagecreatetruecolor($n_w, $n_h);
    $color=imagecolorallocate($new,255,255,255);
    //3.设置透明
    imagecolortransparent($new,$color);
    imagefill($new,0,0,$color);
    //拷贝部分图像并调整
    imagecopyresized($new, $img,0, 0,0, 0,$n_w, $n_h, $width, $height);
    //图像输出新图片、另存为
//     $i = random(80, 200);
    imagepng($new, '7.png');
//     imagedestroy($new);
    imagedestroy($img);;
}