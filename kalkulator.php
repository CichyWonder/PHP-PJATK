<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> kalkulator </title>
</head>
<body>
<style>
    body{
        background: red;
    }
    input{
        border-color: black;
        color: red;
    }
    select{
        border-color: black;
        color: red;
    }
    option{
        color: red;
    }

</style>

    <h1>Kalkulator</h1>

    <FORM action="" method="post">
        <input name="liczba1">
        <select name="dzialanie">
            <option value="suma"> Dodawanie </option>
            <option value="roznica"> Odejmowanie </option>
            <option value="iloczyn"> Mnożenie </option>
            <option value="dzielnik"> Dzielenie </option>
        </select>
        <input name="liczba2">
        <input type="submit" value="Oblicz" name="submit1">
    </FORM>

    <h1>Zaawansowany</h1>

    <FORM action="" method="post">
        <input name="liczba3">
        <select name="zaawansowany">
            <option value="cos"> cos </option>
            <option value="sin"> sin </option>
            <option value="tg"> tg </option>
            <option value="dziebin"> dziesiętne na binarne </option>
            <option value="bindzie"> binarne na dziesiętne </option>
            <option value="hexdzie"> heksadecymalne na dziesietne </option>
            <option value="dziehex"> dziesietne na heksadecymalne </option>
            <option value="radianystopnie"> radiany na stopnie </option>
            <option value="stopnieradiany"> stopnnie na radiany </option>
        </select>
        <input type="submit" value="Oblicz" name="submit2">
    </FORM>
    <?php
     if (isset ($_POST ['submit1'])){
         $liczba1 = $_POST['liczba1'];
         $liczba2 = $_POST['liczba2'];
         $dzialanie = $_POST['dzialanie'];
         if($dzialanie=="suma"){
             echo $liczba1+$liczba2;
         }
         if($dzialanie=="roznica"){
             echo $liczba1-$liczba2;
         }
         if($dzialanie=="iloczyn"){
             echo $liczba1*$liczba2;
         }
         if($dzialanie=="dzielnik"){
             echo $liczba1/$liczba2;
         }
     }

        //Zaawansowany

    if (isset ($_POST ['submit2'])){
        $liczba3 = $_POST['liczba3'];
        $zaawansowany = $_POST['zaawansowany'];
        if($zaawansowany=="cos"){
            echo cos(deg2rad($liczba3));
        }
        if($zaawansowany=="sin"){
            echo sin(deg2rad($liczba3));
        }
        if($zaawansowany=="tg"){
            echo tan(deg2rad($liczba3));
        }
        if($zaawansowany=="dziebin"){
            echo decbin ($liczba3);
        }
        if($zaawansowany=="bindzie"){
            echo bindec($liczba3);
        }
        if($zaawansowany=="hexdzie"){
            echo dechex($liczba3);
        }
        if($zaawansowany=="dziehex"){
           echo hexdec($liczba3);
        }
        if($zaawansowany=="radianystopnie"){
            echo deg2rad($liczba3);
        }
        if($zaawansowany=="stopnieradiany"){
            echo rad2deg($liczba3);
        }
    }

    ?>
</body>
</html>