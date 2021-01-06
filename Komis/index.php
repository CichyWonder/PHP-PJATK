<?php include "Nagłowek.php" ?>
<head>
    <meta charset="utf-8">
</head>
        <div class="row">
            <ul>
            <?php

            $query = "SELECT * FROM car";
            $select = mysqli_query($connection,$query);
            $count = mysqli_num_rows($select);
            $count = ceil($count/8);

            include "Samochody.php";
            ?>
        </ul>
    </div>
</body>
</html>
