<?php

    //生成验证码图片
    session_start();
    Header("Content-type: image/gif");
	
function jirvg($u){
 
$autoWidth = true; // 自动识别宽度(仍在测试)
$width = 25;
$fontsize = 11;
$padding = 20;
$lineHeight = 20;
$font = dirname(__FILE__). '/../font/Menksoft2012.ttf';  //  从 C:\Windows\Fonts 复制 微软雅黑
//$text = "A".chr(10)."B".chr(10)."C".chr(10)."5".chr(10)."7";
 $text =$u;
$wordwrap = explode("\n", $text);
 
if($autoWidth) {
 
    $unicode = 3;
    $maxWidth = 0;
    foreach($wordwrap as $v) {
        if(preg_match('/[\x{4e00}-\x{9fa5}]/u', $v)) {
            $tmpLen = strlen(trim($v))/3;
            if($tmpLen > $maxWidth) $maxWidth = $tmpLen;
        }else{
            $tmpLen = strlen(trim($v));
            if($tmpLen > $maxWidth) $maxWidth = $tmpLen;
        }
    }
 
    $width = $maxWidth/5*($unicode-$unicode/10)*($fontsize+$unicode)+$padding;
}
 
$lineNum = count($wordwrap);
$canvas = imagecreatetruecolor($width, ($padding + $lineHeight*$lineNum) - $padding/4);
$BgColor = imagecolorallocate($canvas, 15,76,8);
imagefill($canvas, 0, 0, $BgColor);
$textColor = imagecolorallocate($canvas,255, 255, 255);
$syntaxColor = imagecolorallocate($canvas,255, 255, 255);
$urlColor =  imagecolorallocate($canvas, 255, 255, 255);
for($i = 0; $i < $lineNum; $i++) {
    imagettftext(
        $image = $canvas, 
        $size = $fontsize, 
        $angle = 0,
        $x = $padding/2, // 注意左边距
        $y = ($i*$lineHeight + $padding +3),
        $color = $i == ($lineNum -1) ? $urlColor : (!($i%4) ? $syntaxColor : $textColor),
        $fontfile = $font,
        $text = $wordwrap[$i]);
}
header('Content-type: image/jpeg');
header("Content-Disposition: inline; filename=canvas.jpg");
  
imagejpeg($canvas);
imagedestroy($canvas);	
}
	
	
$chk_num=mt_rand(1,10000);	

    $_SESSION["silgahv"] = $chk_num;
	
    $u_1=substr($chk_num,0,1);
	$u_2=substr($chk_num,1,1);
	$u_3=substr($chk_num,2,1);
	$u_4=substr($chk_num,3,1);
	$u=$u_1.chr(10).$u_2.chr(10).$u_3.chr(10).$u_4 ;
	jirvg($u);

	?>