<?php
    setcookie("licznik", $licznik=1,time()+60*60*24*7);

    if(!isset($_COOKIE["imie"]) && !isset($_POST["nazwa"])){

            include ("Header.html");
            include  ("Haslo.html");
            include  ("Footer.html");


    }
    else if(isset($_POST["nazwa"])){
        setcookie("imie", $_POST["nazwa"] , time()+60*60*24*7);

        $licznik=$_COOKIE["licznik"];

        include ("Header.html");
        echo "Dziękujemy za podanie imienia";
        include ("Footer.html");
    }
    else{
        include ("Header.html");
        echo "Zostałeś rozpoznany jako {$_COOKIE["imie"]}";
        include  ("Footer.html");
        echo "Liczba Odwiedzin na stronie {$_COOKIE["licznik"]}";


        setcookie("licznik", $licznik++,time()+60*60*24*7);

        setcookie("imie", "", time()-60);
    }

?>