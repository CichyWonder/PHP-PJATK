<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>Logowanie</title>
</head>
<body>
<p>
<FORM action="" method="post">
    <fieldset>
        <legend>Zaloguj sie</legend>
        Login:<input name="login">
        Haslo:<input type="password" name="haslo">
        <input type="submit" value="Przeslij" name="submit">
    </fieldset>
</FORM>
<?php
$login = ($_POST['login']);
$haslo = ($_POST['haslo']);
if (isset($_POST['submit'])) {
    if($login == "student" && $haslo == "student")
        header("Location:logowanie.php");
    else
        echo 'Bledne dane logowania';

}
?>
</p>
</body>
</html>