<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['caretakers_id'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}

$userID = $_SESSION['caretakers_id'];


/** @var mysqli $db */
require_once 'connection.php';

$query = 'SELECT * FROM `caretakers` WHERE id =' . $userID;

$result = mysqli_query($db, $query)
or die('Error ' . mysqli_error($db) . ' with query ' . $query);

if (mysqli_num_rows($result) != 1) {
    header(header: 'Location: login.php');
    exit;
}

$profiel = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['wachtwoord']);
    $password = password_hash($password,PASSWORD_DEFAULT);

    $query = "UPDATE `caretakers`
             SET `email`='$email',`password`='$password'
             WHERE id = '$userID'";

    $result = mysqli_query($db, $query)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query);

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
    <link rel="stylesheet" href="css/style.css">
    <title>KidzGlobe</title>
</head>
<body>

<nav>
    <div class="logo">
        <img src="images/Kidz-Globe-logo%20(1).png" alt="Kidzglobe">
    </div>
    <div>
        <img src="images/profiel.png" alt="">
    </div>

    <div class="dropdown">
        <button class="dropdown-button"><img src="images/dropdown1.png"></button>
        <div class="dropdown-menu">
            <a href="user_home.php" class="dropdown-item">Home</a>
            <a href="form_1.php" class="dropdown-item">Inschrijven</a>
            <a href="user_reservations.php" class="dropdown-item">Inschrijvingen</a>
            <a href="user_children.php" class="dropdown-item">Kinderen</a>
            <a href="logout.php" class="dropdown-item">Log uit</a>
            <a href="over_ons.php" class="dropdown-item">Over Ons</a>
        </div>
    </div>

</nav>
<main>
    <section>
        <div>
            <h1>Profiel bewerken</h1>
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
                    <button type="submit" class="button" name="submit"> Aanpassen </button>
                </div>
            </div>
        </form>

    </section>
</main>
</html>