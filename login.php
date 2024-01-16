<?php
// required when working with sessions
session_start();
/** @var mysqli $db */
print_r($_POST['email']);
print_r($_POST['password']);

$login = false;
// Is user logged in?
if (isset($_SESSION['caretakers_id'])) {
    $login = true;
    $errors = [];
}
// If data valid
if (isset($_POST['submit'])) {
    require_once "connection.php";

    // Get form data
    $email = mysqli_real_escape_string($db, $_POST['email'] );
    $password = mysqli_real_escape_string($db, $_POST['password'] );
    // SELECT the user from the database, based on the email address. (query)
    $query = "SELECT * FROM `caretakers` WHERE email = '$email';";
    $result = mysqli_query($db, $query);

    // Server-side validation
    //$session
    if (mysqli_num_rows($result)== 1) {
        // check if the user exists
        // Get user data from result
        $user = mysqli_fetch_assoc($result);
        print_r($user);
        // Check if the provided password matches the stored password in the database
        if (password_verify($password, $user['password'])) {
            // Store the user in the session
            $_SESSION['caretakers_id'] = $user['id'];
            $login = true;
            // Redirect to secure page
            header('Location: index.php');
            exit();

        }
        // Credentials not valid
        //error incorrect log in
        else {
            $errors['loginFailed'] = "Onjuiste inloggegevens. Probeer opnieuw.";
        }


    }
// User doesn't exist
////error incorrect log in
    else {
        $errors['loginFailed'] = "Gebruiker is niet gevonden";
    }



}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login.css">
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
            <a href="" class="dropdown-item">Home</a>
            <a href="#" class="dropdown-item">Reservering Maken</a>
            <a href="#" class="dropdown-item">Contact</a>
            <a href="#" class="dropdown-item">Over Ons</a>
        </div>
    </div>

</nav>
<main>
    <section>
        <div>
            <h1>Log in</h1>
        </div>
        <form action="" method="post">
            <div>
                <div>
                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <?= $errors['email'] ?? '' ?>
                </div>

                <div>
                    <label for="wachtwoord"></label>
                    <input type="text" id="password" name="password" placeholder="Wachtwoord" required>
                </div>
            </div>
            <div>
                <div>
                    <button class="button" id="button">Inloggen</button>
                </div>
                <div id="link-account">
                    <a id="link-form" href="registreren.php">Geen account? Maak er een aan.</a>
                </div>
            </div>
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
