<?php
//connectie met de database
/** @var $db */
require_once "connection.php";
//check of er een submit is
if(isset($_POST['submit'])){
    //omzetten naar goeie variabelen met security voor scripts
    $caretaker_name = mysqli_real_escape_string($db, $_POST['caretaker_name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $caretaker_phoneNumber = mysqli_real_escape_string($db,$_POST['caretaker_phonenumber']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    //pasword hashen en veilig maken voordat hij de database in gaat
    $hash = password_hash($password,PASSWORD_DEFAULT);
    // in de database inserten

    $query = "INSERT INTO `caretakers`(`id`, `email`, `password`, `caretaker_phonenumber`, `caretaker_name`)
VALUES ('','$email','$hash','$caretaker_phoneNumber','$caretaker_name')";
    $result = mysqli_query($db, $query)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query);
}
//database sluiten
mysqli_close($db);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>KidzGlobe</title>
</head>
<body>

<nav>
    <div class="logo">
        <img src="images/Kidz-Globe-logo (1).png" alt="Kidzglobe">
    </div>

    <div class="dropdown">
        <button class="dropdown-button"><img src="images/dropdown1.png"></button>
        <div class="dropdown-menu">
            <a href="user_home.php" class="dropdown-item">Home</a>
            <a href="form_1.php" class="dropdown-item">Reservering Maken</a>
            <a href="over_ons.php" class="dropdown-item">Over Ons</a>
        </div>
    </div>

</nav>

<main>
    <section>
        <div>
            <h1>Account maken</h1>
        </div>
        <form action="" method="post">
            <div>
                <div>
                    <label for="voornaam"></label>
                    <input type="text" id="caretaker_name" name="caretaker_name" placeholder="Voornaam" required>
                </div>
                <div>
                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                </div>
                <div>
                    <label for="telefoonnummer"></label>
                    <input type="text" id="caretaker_phonenumber" name="caretaker_phonenumber" placeholder="Telefoonnummer" required>
                </div>
                <div>
                    <label for="wachtwoord"></label>
                    <input type="text" id="password" name="password" placeholder="Wachtwoord" required>
                </div>
            </div>

            <button type="submit"  name="submit" class="button" id="button">Account maken</button>

        </form>
    </section>
</main>

<footer>
    <div>
        <div>
            <h3>Contact</h3>
            <p class="adres"><b>Adres:</b> Van Everdijckstraat 31,</p>
            <p class="adres">3083 MA Rotterdam</p>
        </div>
        <div>
            <p><b>E-mail: </b><a href="">info@kdvkidzglobe.nl</a></p>
            <p><b>Tel:</b> #085-078-3390</p>
            <p><b>Mob:</b> #06-11-14-01-45</p>
            <p><b>LRK:</b> 293736285</p>
            <p><b>KvK nmr:</b> 85418072</p>
        </div>
    </div>
    <div>
        <h3>Openingstijden</h3>
        <div id="tijden">
            <div>
                <p class="maandag">Maandag</p>
                <p>Dinsdag</p>
                <p>Woensdag</p>
                <p>Donderdag</p>
                <p>Vrijdag</p>
                <p>Zaterdag</p>
                <p>Zondag</p>
            </div>
            <div>
                <p class="maandag">07:30-18:00</p>
                <p>07:30-18:00</p>
                <p>07:30-18:00</p>
                <p>07:30-18:00</p>
                <p>07:30-18:00</p>
                <p>Gesloten</p>
                <p>Gesloten</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
