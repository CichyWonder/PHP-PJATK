<h2 class="my-4" style="margin-left: 20px; padding-top: 20px;">
    Dodaj nowy samochód
</h2>
     <div class="row">
<div class="w3-container w3-padding-32">
        <form action="" method="post" enctype="multipart/form-data">
                <label for="name">Nazwa</label>
                <input type="text" class="w3-input w3-section w3-border" name="name">
                <label for="description">Opis</label><br>
                <textarea class="w3-input w3-section w3-border" name="description" id="" cols="30" rows="10"></textarea>
                <label for="address">Adres</label>
                <input type="text" class="w3-input w3-section w3-border" name="address">
                <label for="price">Cena</label>
                <input type="text" class="w3-input w3-section w3-border" name="price">
                <select name="brandID" id="">
                    <?php
                    $query = "SELECT * FROM brand";
                    $select_breed = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($select_breed)) {
                        $name = $row['name'];
                        $id = $row['brandID'];
                        echo "<option class=\"w3-input w3-section w3-border\" value='{$id}'>$name</option> ";
                    }
                    ?>
                </select>

            <div class="form-group">
                <label for="image">Zdjęcie</label><br>
                <input type="file" class="form-control" name="image">
            </div>

            <button class="w3-button w3-black w3-section" type="submit" name="insert">Dodaj nowy samochów</button>
        </form>
    </div>
     </div>
