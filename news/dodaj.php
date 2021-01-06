OCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> News </title>
</head>
<body>



<FORM action="" method="post">
    <fieldset>
        <legend> Dodawanie newsa </legend>
        <ul>


            <li> Tytuł: <input name="tyul"> </li>

            <li> Autor: <input name="autor"> </li>


            <li> <label> Treść</label> </li>

            <textarea name="tekst"> Wpisz tutaj swój artykuł!! </textarea>

 </ul>
    </fieldset>

    <input type="submit" value="Wyślij artykuł">

</FORM>

  <?php
    include polacz.php;

?>
</html>