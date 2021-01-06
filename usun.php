<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Usuń </title>
</head>
<body>
<FORM action="" method="post">
    Podaj nazwę pliku lub katalogu do usuniecia: <input name="plik">
    <input type="submit" value="Usuń" name="submit">
</FORM>
<?php
if(isset($_POST['submit'])) {
    $sciezka = getcwd();
    $katalogi = opendir("$sciezka");
    $nazwa = $_POST['plik'];

    while (($plik = readdir($katalogi)) != false) {


        if ($plik == $nazwa) {


            if (filetype("$nazwa") == "dir") {
                rmdir("$nazwa");
                echo("Usunięto katalog o nazwie " . $plik);

            } else if (filetype("$nazwa") == "file") {
                unlink($nazwa);
                echo("Usunięto plik o nazwie " . $plik);
            }


        }
    }
}
?>
</body>
</html>
