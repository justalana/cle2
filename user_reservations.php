<?php
/** @var mysqli $db */
require_once 'connection.php';

$query = "SELECT * FROM reservations";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$reservations = [];
while($row = mysqli_fetch_assoc($result))
{
    $reservations[] = $row;
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
    <link rel="stylesheet" href="./css/user.css">
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
                <a href="#" class="dropdown-item">Over Ons</a>
                <a href="#" class="dropdown-item">Contact</a>
            </div>
        </div>
    </nav>
</header>


<main>

    <h1 class="title">
        Kinderen
    </h1>
    <div class="child-overview">
        <?php foreach ($reservations as $index => $reservation) { ?>
            <ul>
                <li class="list-text">Tijden: <?= htmlentities($reservation['time'])?></li>
                <li class="list-text">Datum: <?= htmlentities($reservation['date'])?></li>
            </ul>
        <?php } ?>
    </div>

</main>

</body>
</html>
