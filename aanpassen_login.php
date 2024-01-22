<?php
if (!isset($_GET['id']) || $_GET['id'] == '') {
    header(header: 'Location: login.php');
    exit;
}

$id = $_GET['id'];

/** @var mysqli $db */
require_once 'connection.php';

$query = 'SELECT * FROM caretakers WHERE id ='.$id;

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

if(mysqli_num_rows($result) != 1) {
    header(header: 'Location: login.php');
    exit;
}

$game = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "UPDATE caretakers 
             SET `email`='$email',`password`='$password'
             WHERE id =" .$id;

    $result = mysqli_query($db, $query)
    or die('Error '.mysqli_error($db).' with query '.$query);

    header(header: 'Location: login.php');
    exit;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>KidzGlobe</title>
</head>
<body>

<nav>
    <div class="logo">
        <img src="/login/images/Kidz-Globe-logo%20(1).png" alt="Kidzglobe">
    </div>

    <div class="dropdown">
        <button class="dropdown-button"><img src="login/images/dropdown1.png"></button>
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
                    <label for="email">Pas hier uw Email aan</label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                </div>

                <div>
                    <label for="wachtwoord">Pas hier uw wachtwoord aan</label>
                    <input type="text" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required>
                </div>
            </div>
            <div>
                <div>
                    <button class="button" id="button">Aanpassen</button>
                </div>
                <div id="link-account">
                    <a id="link-form" href="registreren.php">Geen account? Maak er een aan.</a>
                </div>
            </div>
        </form>

    </section>
</main>
</html>