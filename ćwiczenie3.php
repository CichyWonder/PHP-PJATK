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
if(isset($_GET['deleteId'])){
    $deleteId=$_GET['deleteId'];
    $query1= "DELETE FROM osoba WHERE Id=$deleteId";
    if(!$result1 = mysqli_query($db_lnk,$query1)) {
        mysqli_close($db_lnk);
        echo 'Wystąpił błąd podczas zamykania połączenia z serwerem MySQL<br />';
        echo '</body></html>';
        exit;
    }
}
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
        echo "<td><a href=\"ćwiczenie3.php?deleteId=$row[0]\">Usuń</a></td>";
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