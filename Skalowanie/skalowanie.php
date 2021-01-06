<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Skalowanie</title>
</head>
<body>
<FORM action="" method="post">
    Wysokość: <input type="number" name="wysokosc" placeholder="Wartość w pikselach">
    Szerokość: <input type="number" name="szerokosc" placeholder="Wartość w pikselach">
    Nazwa obrazu(.jpg): <input type="" name="obraz">
    <input type="submit" name="submit" value="Przeskaluj"
</FORM>
<?php
if (isset($_POST["submit"])){
    $wysokosc=$_POST["wysokosc"];
    $szerokosc=$_POST["szerokosc"];
    $obraz=$_POST["obraz"];
    $Dane=array(getimagesize($obraz));

            imagecopyresized("$obraz", "$obraz", 0, 0, 0,0,$Dane[0],$Dane[1],$wysokosc,$szerokosc);



}
?>
</body>
</html>