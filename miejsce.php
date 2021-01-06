<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Rozmiar Pliku </title>
</head>
<body>
<FORM action="" method="post">
    Podaj nazwę pliku lub katalogu: <input name="plik">
    <input type="submit" value="Sprwadź" name="submit">
</FORM>
<?php
if(isset($_POST['submit'])) {
    $sciezka = getcwd();
    $katalogi = opendir("$sciezka");
    $nazwa = $_POST['plik'];

    while (($plik = readdir($katalogi)) != false) {


        if ($plik == $nazwa) {

            $rozmiar = filesize($nazwa);

            echo("Rozmiar pliku " . $nazwa . " wynosi " . $rozmiar." B");
        }




    }
}
?>
</body>
</html>
