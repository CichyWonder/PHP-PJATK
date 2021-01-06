<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista odwiedziń</title>
</head>
</form>
<?php

class Stats{
    private $connection;
    public $login,$password;
    function __construct($connection,$login,$password,$name){

            this->password="";
            if ($this->connection = mysqli_connect("localhost", "$login", "$password") === true) {
                echo="Udało połączyć się z bazą danych";
        }
        }
    }

}
?>
</body>
</html>