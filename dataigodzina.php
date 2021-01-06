<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Data i godzina</title>
</head>
<body>
<?php
$data =getdate();
$strefa=date("P T");
$czas=date( "G:i:sa:");
$dzientyg=$data["wday"];
$dzien=$data["mday"];
$miesiac=$data["mon"];
$rok=$data["year"];

$Dni=array("niedziela","poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota");
$Miesiace=array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień");

echo("Dziś jest ".$Dni[$dzientyg].", ". $dzien ." ". $Miesiace[$miesiac-1]." ". $rok.", ". $czas .", ".$strefa.".");

?>
</body>
</html>