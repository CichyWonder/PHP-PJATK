<?php
$dsn = "mysql:host=localhost;dbname=s20695";
$user = "s20695";
$password = "Mic.Cich";

try{
    $dbo = new PDO ($dsn, $user, $password);
}
catch (PDOException $e){
    echo "Błąd połączenia: " . $e->getMessage();
    exit;
}
?>