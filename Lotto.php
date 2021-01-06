<!DOCTYPE>
<html>
<head>
    <meta charset="uft-8">
    <title>Losowanie</title>
</head>
<body>
<p>
<FORM action="" method="post">
    <fieldset>
        <h3>Podaj swoje liczby</h3><br>
        <input name="liczba1" >
        <input name="liczba2" >
        <input name="liczba3" >
        <input name="liczba4" >
        <input name="liczba5" >
        <input name="liczba6" >
        <input type="submit" value="Przeslij" name="submit">

        <?php
        if(isset ($_POST['submit'])) {
           echo "<br><h3>Twoje liczby</h3><br>";
            for ($i = 1; $i <= 6; $i++) {
                $towjaliczba = $_POST['liczba' . $i];
                echo '<img style="width: 50px; hight: 50 px;" src=" kulki/p' . $towjaliczba . '.png"/>';
            }
            echo "<br>";
            ?>
            <h3>Wylosowane liczby</h3><br>
            <?php
            $lotto = array();
            $j = 0;

            while ($j <= 5) {
                $los = rand(1, 49);
                if (!in_array($los, $lotto)) {
                    array_push($lotto, $los);
                    echo '<img style="width: 50px; hight: 50 px;" src=" kulki/p' . $los . '.png"/>';
                    $j++;
                }
            }

            ?>
            <h3>Trafione liczby:</h3><br>
            <?php
            for ($k = 1; $k <= 6; $k++) {
                $tesame = $_POST['liczba' . $k];
                if (in_array($tesame, $lotto)) {
                    echo '<img style="width: 50px; hight: 50 px;" src=" kulki/p' . $tesame . '.png"/>';
                }
            }
        }
        ?>
    </fieldset>
</FORM>
</p>
</body>
</html>