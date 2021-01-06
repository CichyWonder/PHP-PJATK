<html>
<head>
<meta charset="uft-8">
<title>Formularz</title>
</head>
<body>
<p>
<FORM action="" method="POST">
<Fieldset>
<Legend> Obliczanie kosztu Samochodu</Legend>
<ul>
<li>Model Auta *<br>
	<select name="model">
		<option value="1">Mercedes E w213 50 000€</option>
		<option value="2">Volkswagen Passat B5 5 000€</option>
		<option value="3">Audi R8 200 000€</option>
	</select>
<li>Aktualnu kurs euro *<input type="text" name="kurs" placeholder="EUR/PLN"><br>
<li>Dodatkowe wyposażenie<br>
<li><input type=checkbox name="radio" >Radio 400€</li>
<li><input type=checkbox name="klimatyzacja" >Klimatyzacja 1500€</li></li>
<li><input type=checkbox name="alarm" >Alarm 1250€</li></li>
<li>Obowiązkowe Ubezpieczenie 10 000€</li>
<li>Piersze auto?<br><li><input type=radio name="raadio" value="1">Tak</li><li><input type=radio name="raadio" value="0">Nie</li></li>
<li>Na ile lat ubzpieczyć auto? Zniżka nie obowiązuje pierszego auta *<input type="text" name="lata"><br>
</ul>
<input type=submit name="submit" value="Oblicz"><br>
</p>
</Fieldset>
</FORM>
</body>
</html>
<?php
function __autoload($nazwa_clasy){
    include $nazwa_clasy . '.php';
}
if(isset($_POST['submit'])){
if($_POST['model']=="1"){
    $model = "Mercedes E w213";
    $cena = 50000;
}elseif($_POST['model']=="2"){
    $model = "Volkswagen Passat B5";
    $cena = 5000;
}else{
    $model = "Audi R8";
    $cena = 200000;
}
$kurs_euro = $_POST['kurs'];


if(isset($_POST['radio'])){
    $radio = "radio";
}else{
    $radio = 0;
}



if(isset($_POST['klimatyzacja'])){
    $klimatyzacja = 'klimatyzacja';
}else{
    $klimatyzacja = 0;
}


if(isset($_POST['alarm'])){
    $alarm = 'alarm';
}else{
    $alarm= 0;
}

$piersze_auto = $_POST['raadio'];
$lata = $_POST['lata'];

$kurs_euro = $_POST['kurs'];

$auto = new NoweAuto($model,$cena,$kurs_euro);

//echo $auto->ObliczCene()."<br>";
$auto_z_dodatkami = new AutoZDodatkami($model,$cena,$kurs_euro);
$auto_z_dodatkami->__set($klimatyzacja,1500);
$auto_z_dodatkami->__set($radio,400);
$auto_z_dodatkami->__set($alarm,1250);

//echo $auto_z_dodatkami->ObliczCene();
$auto_z_ubezpieczeniem = new Ubezpieczenie($model,$cena,$kurs_euro);
$auto_z_ubezpieczeniem->__set($klimatyzacja,1500);
$auto_z_ubezpieczeniem->__set($radio,400);
$auto_z_ubezpieczeniem->__set($alarm,1250);

$auto_z_ubezpieczeniem->__set("pierwszySamochod",$piersze_auto);
$auto_z_ubezpieczeniem->__set("liczbaLat",$lata);

//echo $auto_z_ubezpieczeniem->ObliczCene();

echo "Wybrany model auta: ".$model."<br>";
echo "Podstawowa cena auta : ".$auto->ObliczCene()." zł<br>";
echo "Cena auta z dodatkami : ".$auto_z_dodatkami->ObliczCene()." zł<br>";
echo "Cena ubezpieczenia : ".$auto_z_ubezpieczeniem->ObliczCene()."zł<br>";
$cena_ubezpieczenego = $auto_z_ubezpieczeniem->ObliczCene()+$auto_z_dodatkami->ObliczCene();
echo "Cena auta z ubezpieczeniem : ".$cena_ubezpieczenego." zł";

}
?>