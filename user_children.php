<?php
/** @var mysqli $db */
require_once 'connection.php';

//Stap 3: Select all albums from the database
$query = "SELECT * FROM children";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

// Stap 4: Save results in an array
$children = [];
while($row = mysqli_fetch_assoc($result))
{
    $children[] = $row;
}

// Stap 5: Close the connection to the database
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
                <a href="index.php" class="dropdown-item">Home</a>
                <a href="#" class="dropdown-item">Inschrijven</a>
                <a href="#" class="dropdown-item">Inschrijvingen</a>
                <a href="#" class="dropdown-item">Kinderen</a>
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
    <?php foreach ($children as $index => $child) { ?>
        <h2><?= htmlentities($child['name'])  ?></h2>
        <ul>
            <li>Naam: <?= htmlentities($child['name'])?></li>
            <li>Geboortedatum: <?= htmlentities($child['date_of_birth'])?></li>
            <li>BSN: <?= htmlentities($child['bsn'])?></li>
            <li>Nationaliteit: <?= htmlentities($child['nationality'])?></li>
            <li>Geslacht: <?= htmlentities($child['gender'])?></li>
            <li>Allergieën: <?= htmlentities($child['allergies'])?></li>
            <li>Volgt het vaccinatieprogramma: <?= htmlentities($child['vaccinated'])?></li>
        </ul>
    <?php } ?>
</main>

</body>
</html>
