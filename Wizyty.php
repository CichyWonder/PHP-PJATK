<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Wizyty </title>
</head>
<body>

<?php
$plik = fopen("odwiedziny.txt", "r+");


while(!flock($plik, LOCK_EX)) {
}

$licznik = intval(fread($plik, filesize("odwiedziny.txt")));
$licznik++;


fseek($plik, 0);
fwrite($plik, $licznik);
fflush($plik);
flock($plik, LOCK_UN);

fclose($plik);

echo "Stronę odwiedzono ".$licznik." razy";

?>
</body>
</html>