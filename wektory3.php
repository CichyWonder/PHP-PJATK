
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Wektory</title>
</head>
<html>
<body>
<?php
    $A=array();
    $B=array();
    $rozmiar=$_POST['ukryty'];
    $suma=0;
        for($i=0;$i<$rozmiar;$i++){
            $A[$i]= $_POST["poleA$i"];
            $B[$i]= $_POST["poleB$i"];
            $suma += $A[$i]*$B[$i];
        }
        echo "iloczyn skalarny wektorow wynosi: A[";
        for ($i; $i<$rozmiar;$i++){
                echo $A[$i]. ", ";
        }
        echo "], B[";
        for ($i; $i<$rozmiar;$i++){
                 echo $A[$i]. ", ";
        }
        echo "] wynosi:" . $suma;
?>

</FORM>
</body>
</html>