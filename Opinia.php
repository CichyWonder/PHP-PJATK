<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Opinia </title>
</head>
<body>
<FORM action="" method="post">
    <fieldset>
        <legend>Opinia</legend>
        <textarea name="opinia" rows="20" cols="20"></textarea>
            <br>
            <input type="submit" name="submit" value="Wyślij">
    </fieldset>
</FORM>
<?php
    if(isset($_POST["submit"])){

        $opinia= date("d-m-Y G:i:s")." ".$_POST["opinia"];
        $pomocnicza=file_get_contents("opinie.txt");
        $plik=fopen("./opinie.txt", "w+");

        if(file_put_contents("./opinie.txt", "\n".$opinia, FILE_APPEND) === false){
            echo ("Nie udało się zapisać opinii");
        }

        file_put_contents("opinie.txt", $pomocnicza, FILE_APPEND);
        echo "Wszytskie opinie:";

        "<br>";
        echo "<ul>";
        while (!feof($plik)){
            $str=fgets($plik);
            $str=nl2br($str);
            echo "<li>".$str."\n";
        }
        fclose($plik);



    }
?>
</body>
</html>