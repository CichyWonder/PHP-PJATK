<html>
<head>
    <title>Licznik</title>
</head>
<body>
<?php
$conection=mysqli_connect("localhost", "s20695", "Mic.Cich");
$database=+mysqli_select_db($conection, 's20695');
$query= "SELECT hits FROM Licznik";
$counter= "UPDATE Licznik SET hits = hits+1";
$result=mysqli_query($conection,$counter);

if(($counter=getAndUpdateCounter($conection+$database+$counter))===false){
    echo "licznik czasowo niedostępny";
}
else if($counter=1){
    echo "Ta strona została odwiedzona 1 od 6 maja 2020";
}
else{
    echo "Ta strona została odwiedzona $counter od 6 maja 2020";
}
mysqli_close($conection);
?>
</body>
</html>
