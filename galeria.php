<html>
<head>
<meta charset=utf-8">
<title>Galeria obrazów</title>
</head>
<body>
<?php
$imgDir = "./Obrazy";
//odczytanie parametru
if(isSet($_GET['imgid'])){
  $imgId = $_GET['imgid'];
}
else{
  $imgId = 0;
}

//odczytanie zawarto¶ci katalogu
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);

foreach($dir as $key=>$x){
    if(!is_file("$imgDir/$x")){
        unset($dir[$key]);
    }
}
foreach($dir as $key => $x){
    $ext=substr($x,strlen($x)-4,4);
    echo"$ext";
    if($ext !=".jpg" && $ext !=".gif" && $ext !=".png"){
     unset($dir[$key]);
    }   
}

$count = count($dir);
if($count<1){
 echo "Brak zdjęć do wyświetlenia.";
}

//sprawdzenie poprawno¶ci parametru
if($imgId < 0 || $imgId >= $count || !is_Numeric($imgId)){
  $imgId = 0;
}

//ustalenie nazwy bież±cego obrazu oraz
//identyfikatorów obrazów dla odno¶ników
$imgName = $dir["$imgId"];
$first = 0;
$last = $count - 1;
if($imgId < $count - 1){
  $next = $imgId + 1;
}
else{
  $next = $count - 1;
}

if($imgId > 0){
  $prev = $imgId - 1;
}
else{
  $prev = 0;
}
?>
<div>
<div id='obraz' style='text-align:center'>
<?php
  echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\" />";
?>
</div>
<div id='opis' style='text-align:center'>
<?php 
  $imgId++;
  echo "Obraz $imgName ($imgId z $count)"; 
?>
</div>
<div id='nawigacja' style='text-align:center'>
<?php 
  echo "<a href=\"galeria.php?imgid=$first\">Pierwszy</a> ";
  echo "<a href=\"galeria.php?imgid=$prev\">Poprzedni</a> ";
  echo "<a href=\"galeria.php?imgid=$next\">Następny</a> ";
  echo "<a href=\"galeria.php?imgid=$last\">Ostatni</a> ";
?>
</div>
</div>
</body>
</html>