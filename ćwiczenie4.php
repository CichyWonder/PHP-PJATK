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
if(isset($_GET['editid'])){
    $editid=$_GET['editid'];
    $query="SELECT * FROM OSOBA WHERE ID=".$editid;
    $row= mysqli_fetch_row(mysqli_query($db_lnk,$query));

    echo '<FORM action="ćwiczenie4.php" method="post"> 
                <input type="hidden" name="a" value="save"/>
                <label for="imie"> Imie: </label>
                <input type="text" name="imie" value="' . $row[1] . '">
                <label for="nazwisko"> Nazwisko: </label>
                <input type="text" name="nazwisko" value="' . $row[2] . '">
                <label for="data"> Data urodzenia: </label>
                <input type="text" name="data" value="' . $row[3] . '">
                <label for="miejsce"> Miejsce urodzenia: </label>
                <input type="text" name="miejsce" value="' . $row[4] . '">
                <input type="submit">
          </FORM>';
}
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$rokurodzenia = $_POST['data'];
$miejsceurodzenia = $_POST['miejsce'];

$query1= "INSERT INTO osoba (Imie, Nazwisko, Rok_urodzenia, Miejsce_urodzenia) VALUES ('$imie','$nazwisko','$rokurodzenia','$miejsceurodzenia')";
$query = "SELECT * FROM osoba";
if(!$result = mysqli_query($db_lnk,$query)) {
    mysqli_close($db_lnk);
    echo 'Wystąpił błąd podczas zamykania połączenia z serwerem MySQL<br />';
    echo '</body></html>';
    exit;
}
?>
<table>
    <tr>
        <td>Id</td>
        <td>Imię</td>
        <td>Nazwisko</td>
        <td>Rok Urodzenia</td>
        <td>Miejsce Urodzenia</td>
        <td>Usuwanie</td>
    </tr>
    <?php
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td><a href=\"ćwiczenie4.php?editid=$row[0]\">Edytuj</a></td>";
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