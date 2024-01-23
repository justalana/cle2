<?php
session_start();
/** @var mysqli $db */

// Check if user is logged in
if (!isset($_SESSION['caretakers_id'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}

// Include the database connection file
require_once "connection.php";

// Retrieve user information based on the user ID stored in the session
$userID = $_SESSION['caretakers_id'];
$query = "SELECT * FROM `caretakers` WHERE id = '$userID'";
$result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db) . ' with query ' . $query);

// Check if the user exists
if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $userName = $user['caretaker_name'];
} else {

    echo "User not found";
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kidzglobe login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./css/user.css?v<?php echo time()?>">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <img src="images/Kidz-Globe-logo%20(1).png" alt="Kidzglobe">
        </div>
        <div>
            <img src="images/profiel.png" alt="" onclick="window.open('aanpassen_login.php')">
        </div>

        <div class="dropdown">
            <button class="dropdown-button"><img src="images/dropdown1.png"></button>
            <div class="dropdown-menu">
                <a href="user_home.php" class="dropdown-item">Home</a>
                <a href="form_1.php" class="dropdown-item">Inschrijven</a>
                <a href="user_reservations.php" class="dropdown-item">Inschrijvingen</a>
                <a href="user_children.php" class="dropdown-item">Kinderen</a>
                <a href="over_ons.php" class="dropdown-item">Over Ons</a>
            </div>
        </div>
    </nav>
</header>


<main>
    <h1 class="title">
        Welkom, <?php echo $userName; ?>
    </h1>

    <div class="button-container">
        <div class="button-t">
            <div>
                <a href="user_reservations.php">
                    <button class="button">Inschrijvingen</button>
                </a>
            </div>
            <div>
                <a href="user_children.php">
                    <button  class="button">Kinderen</button>
                </a>
            </div>
        </div>
        <div>
            <a href="form_1.php">
                <button class="button-b" >Inschrijven</button>
            </a>
        </div>
    </div>
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
