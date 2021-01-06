<html>
<head>
    <title>Odczyt danych z bazy</title>
</head>
<body>
<?php
if(!$db_lnk = mysqli_connect("localhost", "s20695", "Mic.Cich")){
    echo 'Wystąpił błąd podczas próby połączenia z serwerem MySQL <br />';
    echo '</body></html>';
    exit;
}
if(!mysqli_select_db($db_lnk, 's20695')){
    mysqli_close($db_lnk);
    echo 'Wystąpił bład podczas wyboru bazy danych<br />';
    echo '</body></html>';
    exit;
}
if(isset($_GET['sortId'])){
    $sortId=$_GET['sortId'];
}
else{
    $sortId=1;
}
$query= 'SELECT * FROM osoba ORDER BY '.$sortId;
if(!$result = mysqli_query($db_lnk,$query)) {
    mysqli_close($db_lnk);
    echo 'Wystąpił błąd podczas zamykania połączenia z serwerem MySQL<br />';
    echo '</body></html>';
    exit;
}
?>
<table>
    <tr>
        <td><a href="ćwiczenie1.php ? sortId=1">Id</a></td>
        <td><a href="ćwiczenie1.php ? sortId=2">Imię</a></td>
        <td><a href="ćwiczenie1.php ? sortId=3">Nazwisko</a></td>
        <td><a href="ćwiczenie1.php ? sortId=4">Rok Urodzenia</a></td>
        <td><a href="ćwiczenie1.php ? sortId=5">Miejsce Urodzenia</a></td>
    </tr>
    <?php
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
if(!mysqli_close($db_lnk)){
    echo 'Wystąpił błąd podczas zamykania połączenia z serwerem MySQL1<br />';
}
?>
</body>
</html>