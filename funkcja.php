<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> formularz </title>
</head>
<body>
<style>
    body{
        background: blanchedalmond;
    }
    FORM{
        background: brown;
    }
</style>
<FORM action="" method="post">
    <fieldset>
        <center> <legend> Podaj Pesel </legend> </center>
    <center> <label> Pesel: </label> <input name="pesel"> </input> </center> </center> <br>
    <center> <input type="submit" name="submit1" value="Preześlij"> </body> </input> </center>

    </fieldset>

</FORM>

<?php

    if(isset ($_POST['submit1'])){
        pesel($_POST ['pesel']);
    }

    function pesel ($pesel){
        $rok=substr($pesel,0,2);
        $miesiac=substr($pesel, 2,2);
        $dzien=substr($pesel, 4, 2);
        $plec=substr ($pesel, 9,1);
        $miesiace=array('styczen', 'luty', 'marzec' , 'kwiecien' , 'maj', 'czerwiec' , 'lipiec' , 'sierpien', 'wrzesien' , 'pazdziernik' , 'listopad', 'grudzien');

        if($miesiac>12){
            $rok+=2000;
            $miesiac-=20;
        }
        else{
            $rok+=1900;
        }
        if($plec%2==1){
            $plec = 'Mezczyzna';
        }
        else{
            $plec = 'Kobieta';
        }
        echo 'Urodziłeś się ', $dzien, ' ', $miesiace[$miesiac-1], ' ', $rok ,' ', 'roku';
        echo '<br>';
        echo 'Jesteś ', $plec;

    }

?>

</body>
</html>
