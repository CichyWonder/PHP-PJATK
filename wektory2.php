<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Wektory</title>
</head>
<html>
<body>

<FORM action="wektory3.php" method="post">
    <?php
    if(isset($_POST['submit'])) {
        $ile = $_POST['rozmiar'];
        echo "Wektor A: ";
        for ($i = 0; $i < $ile; $i++) {
            echo '<input style width: 50px; type="number" name= "poleA' . $i . '"/>';
        }
        echo "Wektor B: ";
        for ($i = 0; $i < $ile; $i++) {
            echo '<input style width: 50px; type="number" name= "poleB' . $i . '"/>';
        }
        echo '<input type="submit" name="submit">';
        echo '<input type="hidden" name="ukryty" value="' . $ile . '">';
    }
    ?>
</FORM>
</body>
</html>