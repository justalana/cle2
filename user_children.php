<?php
/** @var mysqli $db */
require_once 'connection.php';

$query = "SELECT * FROM children";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$children = [];
while($row = mysqli_fetch_assoc($result))
{
    $children[] = $row;
}

$query = "SELECT * FROM doctors";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$doctors = [];
while($row = mysqli_fetch_assoc($result))
{
    $doctors[] = $row;
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
    <div class="child-overview">
        <?php foreach ($children as $index => $child) { ?>
            <h2 class="heading"><?= htmlentities($child['name'])  ?></h2>
            <ul>
                <li class="list-text">Naam: <?= htmlentities($child['name'])?></li>
                <li class="list-text">Geboortedatum: <?= htmlentities($child['date_of_birth'])?></li>
                <li class="list-text">BSN: <?= htmlentities($child['bsn'])?></li>
                <li class="list-text">Nationaliteit: <?= htmlentities($child['nationality'])?></li>
                <li class="list-text">Geslacht: <?= htmlentities($child['gender'])?></li>
                <li class="list-text">Allergieën: <?= htmlentities($child['allergies'])?></li>
                <li class="list-text">Volgt het vaccinatieprogramma: <?= htmlentities($child['vaccinated'])?></li>
            </ul>
        <?php } ?>

        <?php foreach ($doctors as $index => $doctor) { ?>
            <h2 class="heading-smaller">Dokter</h2>
            <ul>
                <li class="list-text">Naam: <?= htmlentities($doctor['doctor_name'])?></li>
                <li class="list-text">Telefoonnummer: <?= htmlentities($doctor['doctor_phonenumber'])?></li>
                <li class="list-text">Verzekeringsmaatschappij: <?= htmlentities($doctor['insurance'])?></li>
                <li class="list-text">Polisnummer: <?= htmlentities($doctor['polis_number'])?></li>
            </ul>
        <?php } ?>
    </div>

</main>

</body>
</html>
