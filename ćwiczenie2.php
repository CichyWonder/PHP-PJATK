<html>
<head>
    <title>Odczyt danych z bazy</title>
</head>
<body>
<FORM action="" method="POST">
    Imie<input name="imie"><br/>
    Nazwisko<input name="nazwisko"><br/>
    Rok Urodzenia<input name="rokurodzenia"><br/>
    Miejsce Urodzenia<input name="miejsceurodzenia"><br/>
    <input type="submit" name="submit"><br/>
</FORM>
<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$rokurodzenia = $_POST['rokurodzenia'];
$miejsceurodzenia = $_POST['miejsceurodzenia'];
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
$query1= "INSERT INTO osoba (Imie, Nazwisko, Rok_urodzenia, Miejsce_urodzenia) VALUES ('$imie','$nazwisko','$rokurodzenia','$miejsceurodzenia')";
$query = "SELECT * FROM osoba ORDER BY ".$sortId;
if(!$result1 = mysqli_query($db_lnk,$query1)) {
    mysqli_close($db_lnk);
    echo 'Wystąpił błąd podczas zamykania połączenia z serwerem MySQL<br />';
    echo '</body></html>';
    exit;
}
if(!$result = mysqli_query($db_lnk,$query)) {
    mysqli_close($db_lnk);
    echo 'Wystąpił błąd podczas zamykania połączenia z serwerem MySQL<br />';
    echo '</body></html>';
    exit;
}
?>
<table>
    <tr>
        <td>Id</a></td>
        <td>Imię</a></td>
        <td>Nazwisko</a></td>
        <td>Rok Urodzenia</a></td>
        <td>Miejsce Urodzenia</a></td>
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