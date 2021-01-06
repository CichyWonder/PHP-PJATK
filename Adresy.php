<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Adresy </title>
</head>
<body>
<FORM action="" method="post">
    Adres (bez http/): <input name="adres">
    Opis linku: <input name="opis">
    <input type="submit" value="Wyślij" name="submit">
</FORM>
<?php
if(isset($_POST['submit'])){

    $adres=$_POST["adres"];
    $opis=$_POST["opis"];

    $plik=fopen("linki.txt", "r");

    file_put_contents("linki.txt", "\n".$adres." ".$opis, FILE_APPEND);

    while(!feof($plik)){

        $linia=trim(fgets($plik));
        $pozycja=strpos($linia," ");
        $adres=substr($linia,0,$pozycja);
        $opis=substr($linia,$pozycja+1);
        echo "<a href='$adres' target='_blank'.$opis</a></br>";

    }
    fclose($plik);

}


?>
</body>