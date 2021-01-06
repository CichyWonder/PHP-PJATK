<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Flagi</title>
</head>
<body>
<?php

$polska=imagecreatetruecolor(200, 80);
$czerwony=imagecolorallocate($polska,255,0,0);
$bialy=imagecolorallocate($polska,255,255,255);
imagefilledrectangle($polska,0,0,200,40,$bialy);
imagefilledrectangle($polska,0,40,200,80,$czerwony);
imagejpeg($polska, "polska.jpg");


$francja=imagecreatetruecolor(200, 80);
$czerwony=imagecolorallocate($francja,255,0,0);
$bialy=imagecolorallocate($francja,255,255,255);
$niebieski=imagecolorallocate($francja,0,0,255);
imagefilledrectangle($francja,0,0,67,80,$niebieski);
imagefilledrectangle($francja,67,0,133,80,$bialy);
imagefilledrectangle($francja,133,0,200,80,$czerwony);
imagejpeg($francja, "francja.jpg");

$szwecja=imagecreatetruecolor(200, 80);
$niebieski=imagecolorallocate($szwecja,0,0,255);
$zolty=imagecolorallocate($szwecja,255,255,0);
imagefill($szwecja,0,0,$niebieski);
imagefilledrectangle($szwecja,50,0,70,80,$zolty);
imagefilledrectangle($szwecja,0,30,200,50,$zolty);
imagejpeg($szwecja, "szwecja.jpg");

$norwegia=imagecreatetruecolor(200, 80);
$czerwony=imagecolorallocate($norwegia,255,0,0);
$bialy=imagecolorallocate($norwegia,255,255,255);
$niebieski=imagecolorallocate($norwegia,0,0,255);
imagefill($norwegia,0,0,$czerwony);
imagefilledrectangle($norwegia,50,0,70,80,$bialy);
imagefilledrectangle($norwegia,0,30,200,50,$bialy);
imagefilledrectangle($norwegia,55,0,65,80,$niebieski);
imagefilledrectangle($norwegia,0,35,200,45,$niebieski);
imagejpeg($norwegia, "norwegia.jpg");
?>
<img src="polska.jpg"  height="80 width="200">
<img src="francja.jpg"  height="80 width="200"> <br>
<img src="szwecja.jpg"  height="80 width="200">
<img src="norwegia.jpg"  height="80 width="200">

</body>
</html>