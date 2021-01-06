<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> kolokwium </title>
</head>
<body>
<?php
setlocale(LC_ALL, 'pl_PL');

$t1=mktime(9,5,0,6,10,2020);
$t2=time();
$dni=floor($t1-$t2)/(60*60*24);
$godz=(($t1-$t2)/(60*60))%24;
echo ("Do kolokwium zostało ". (round ($dni))." dni i ".$godz. "godzin.");
?>
</body>
