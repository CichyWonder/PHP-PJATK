<?php

$query = "SELECT * FROM car WHERE status = 'opublikowany' ORDER BY carID";
$select_all = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_all)) {
    $carID = $row['carID'];
    $name = $row['name'];
    $address = $row['address'];
    $image = $row['image'];
    $description = substr($row['description'], 0, 150);
    $price = $row['price'];
    $status = $row['status'];
    ?>
    <head>
        <meta charset="utf-8">
    </head>
        <div class="w3-col l3 m6 w3-margin-bottom" >
            <a href="#"><img src="images/<?php echo $image;  ?>" width="300" height="300" alt=""></a>
            <div class="card-body">
                <h4 class="w3-border-bottom w3-border-light-grey w3-padding-16">
                    <?php echo $name; ?>
                </h4>
                <p class="card-text"> <small><?php echo $address; ?></small> <br> <strong> <?php echo "   " . $price; ?>zł </strong></p>
                <p class="card-text"><?php echo $description; ?></p>
                <a class="w3-button w3-black w3-section" href="Kupno.php"> Kup Teraz!!</a> <a/>
            </div>
        </div>
    <?php
}
?>
