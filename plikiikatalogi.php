<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title> Pliki i Katalogi </title>
</head>
<body>

<?php
$sciezka=getcwd();
$folder=opendir("$sciezka");


echo "<h1> Katalogi: <h1> <br>";

while (($katalogi=readdir($folder))!= false){


    if(filetype("$katalogi")=="dir"){

        echo ($katalogi."<br>");

    }


}

echo "<h1> Pliki: <h1> <br>";

$folder=opendir("$sciezka");

while (($plik=readdir($folder)) != false){

     if(filetype("$plik")=="file"){

        echo ($plik."<br>");

    }

}


closedir($folder);

?>
</body>
</html>