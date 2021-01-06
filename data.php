<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Data </title>
</head>
<body>
<FORM action="" method="post">
    Dzień: <input type="number" name="dzien" min="1" max="31">
    Miesiąc: <input type="number" name="miesiac" min="1" max="12">
    Rok: <input type="number" name="rok" min="1">
    <input type="submit" value="Wyślij" name="submit">
</FORM>
<?php
if(isset($_POST['submit'])){

    $dzien=$_POST['dzien'];
    $miesiac=$_POST['miesiac'];
    $rok=$_POST['rok'];

    $Dni=array("niedziela","poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota");
    $Miesiace=array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień");


    $data = strtotime("$dzien-$miesiac-$rok");
    $miesiactxt= date("n", $data);
    $dzientyg = date('w', $data);

 echo ($dzien." ".$Miesiace[$miesiactxt-1]." ".$rok ." to  ". $Dni[$dzientyg]);



}


?>
</body>