<?php include "Nagłowek.php" ?>

    <?php
    if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $description = mysqli_real_escape_string($connection,$description);
        $address = $_POST['address'];
        $brandID = $_POST['brandID'];
        $price = $_POST['price'];
        $image_name = $_FILES['image']['name'];
        $image_name_tmp =$_FILES['image']['tmp_name'];
        move_uploaded_file($image_name_tmp,"images/$image_name");

        $query ="INSERT INTO car(name, description, address, brandID, image, price, addingDate) VALUES('$name','$description','$address',$brandID,'$image_name', $price, now())";

        $insert_car = mysqli_query($connection,$query);

        if(!$insert_car){
            die("Nie udało się" . mysqli_error($connection));
        }
    }

    if(isset($_GET['source'])){
        $source = $_GET['source'];
    }else{
        $source = "";
    }

    switch($source)
    {
        case "edit":
            include "Edytuj.php";
            break;
        default:
            include "Dodawaniepojazdu.php";
            break;
    }
    ?>

    <table id="list" class="w3-input w3-section w3-border">
        <tr>
            <th>Id</th>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Zdjęcie</th>
            <th>Cena</th>
            <th>Edytuj</th>
            <th>Usuń</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
        <tbody>
        <?php
        $query = "SELECT * FROM car ORDER BY carID DESC";
        $select_car_admin = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_car_admin)){
            $carID = $row['carID'];
            $brandID = $row['brandID'];
            $name = $row['name'];
            $description = $row['description'];
            $image = $row['image'];
            $price = $row['price'];
            $address = $row['address'];
            $status = $row['status'];
            $addingDate = $row['addingDate'];
            $owner = $row['owner'];
            $owner_phone = $row['phoneNumber'];
            $owner_email = $row['email'];

            echo "<tr><td>{$carID}</td>";
            echo "<td>{$name}</td>";

            $query = "SELECT * FROM brand WHERE brandID = $brandID ";
            $select_brand = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_brand)){
                $name = $row['name'];

                echo "<td>{$name}<br><br>$address<br><br>$owner<br><br>$owner_phone<br><br>$owner_email</td>";
            }

            echo "<td ><img width='100' height='50' src='images/{$image}'></td>";
            echo "<td >{$price}zł</td>";
            echo "<td><a href='Kontrolerpojazdów.php?source=edit&id={$carID}'>Edytuj</a></td>";
            echo "<td><a href='Kontrolerpojazdów.php?delete={$carID}'>Usuń</a></td>";
            echo "<td>{$addingDate}</td>";
            echo "<td>{$status}</td>";
            echo "<td><a href='Kontrolerpojazdów.php?statusp={$carID}'>Opublkuj</a></td>";
            echo "<td><a href='Kontrolerpojazdów.php?statusd={$carID}'>Ukryj</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <?php

    if(isset($_GET['delete'])){
        $the_id = $_GET['delete'];
        $query ="DELETE FROM car WHERE carID = {$the_id}";
        $delete = mysqli_query($connection,$query);

        header("Location: Kontrolerpojazdów.php");
    }

    if(isset($_GET['statusp'])){
        $the_id = $_GET['statusp'];
        $query ="UPDATE car SET status = 'opublikowany' WHERE carID = {$the_id}";
        $update_status = mysqli_query($connection,$query);

        header("Location: Kontrolerpojazdów.php");
    }

    if(isset($_GET['statusd'])){
        $the_id = $_GET['statusd'];
        $query ="UPDATE car SET status = 'ukryty' WHERE carID = {$the_id}";
        $update_status = mysqli_query($connection,$query);

        header("Kontrolerpojazdów.php");
    }
    ?>

<?php include "Stópka.php"; ?>
