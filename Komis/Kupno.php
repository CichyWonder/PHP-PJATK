<?php include "Połączenie.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Kupno</title>
</head>

<body>
<?php include "Nagłowek.php"; ?>
<?php
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone)) {

        $firstname = mysqli_real_escape_string($connection, $firstname);
        $lastname = mysqli_real_escape_string($connection, $lastname);

        $query = "INSERT INTO subscriber(firstname, lastname, email, phoneNumber) 
                  VALUES('$firstname','$lastname','$email','$phone')";

        $register_subscriber = mysqli_query($connection, $query);

        if (!$register_subscriber) {
            die("Błąd " . mysqli_error($connection));
        }

        if ($register_subscriber) {
            $message = "Kupno udane";
        }
    }
} else {
    $message = "";
}
?>

<div class="w3-container w3-padding-32">
        <div class="card-header">Formularz Kupna</div>
            <form action="Kupno.php" role="form" method="post" id="login-form">
                <h6 class="text-center"><?php echo $message; ?></h6>
                            <label for="firstname">Imię</label>
                            <input class="w3-input w3-section w3-border" name="firstname" type="text" aria-describedby="nameHelp" placeholder="Imię" required>
                            <label for="lastname">Nazwisko</label>
                            <input class="w3-input w3-section w3-border" name="lastname" type="text" aria-describedby="nameHelp" placeholder="Nazwisko" required>
                            <label for="email">Adres E-mail</label>
                            <input class="w3-input w3-section w3-border" name="email" type="email" aria-describedby="emailHelp" placeholder="Adres e-mail" required>
                            <label for="phone">Numer telefonu</label>
                            <input type="tel" class="w3-input w3-section w3-border" name="phone" placeholder="numer telefonu">
                            <input type="submit" name="submit" id="btn-login" class="w3-button w3-black w3-section" value="Kup">
            </form>
    </div>
</div>
</body>
<?php include "Stópka.php"; ?>
</html>

