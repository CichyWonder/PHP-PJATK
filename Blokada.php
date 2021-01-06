<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Blokada </title>
</head>
<body>
<?php
$ip=$_SERVER["REMOTE_ADDR"];
$plik=file("ip.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($plik as $adres){
        if($ip==$adres){
            echo "Zostałeś zablokowany";
        }
        else{
            echo "Witaj na stronie!!!";
        }

}
?>
</body>