<?php
session_start();

if (!isset($_SESSION['caretakers_id'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}

/** @var mysqli $db */
require_once 'connection.php';

// Retrieve user information based on the user ID stored in the session
$userID = $_SESSION['caretakers_id'];
$query = "SELECT * FROM `reservations` WHERE caretaker_id = '$userID'";
$result = mysqli_query($db, $query) or die('Error '.mysqli_error($db).' with query '.$query);
$time = '';

// Check if the user has children
if (mysqli_num_rows($result) > 0) {
    $reservations = [];
    while($row = mysqli_fetch_assoc($result)) {
        $reservations[] = $row;
    }
}

mysqli_close($db);
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
</header>


<main>

    <h1 class="title">
        Reserveringen
    </h1>
    <div class="child-overview">
        <?php foreach ($reservations as $index => $reservation) { ?>
            <ul class="reservation_border">
                <li class="list-text">Startdatum: <?= htmlentities($reservation['date'])?></li>
                <li class="list-text">Dag: <?= htmlentities($reservation['day'])?></li>
                <li class="list-text">Tijd:
                    <?php if (htmlentities($reservation['isMorning']) == 1) { $time = 'Ochtend'; } else { $time = 'Middag'; }?>
                    <?= htmlentities($time) ?>
                </li>
                <a class="delete_reservation" href="reservation_delete.php?id=<?= $reservation['id']; ?>">Verwijder inschrijving</a>

            </ul>
        <?php } ?>
    </div>

</main>

</body>
</html>
