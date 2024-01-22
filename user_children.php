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
$query = "SELECT child_id FROM `child_caretaker` WHERE caretaker_id = '$userID'";
$result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db) . ' with query ' . $query);

// Check if the user has children
if (mysqli_num_rows($result) > 0) {
    $id_numbers = [];
    while($row = mysqli_fetch_assoc($result)) {
        $id_numbers[] = $row;
    }
} else {
    echo "No children found";
    exit();
}

// Get child information using child id in the child_caretaker table
$child_id = array_column($id_numbers, 'child_id');
$child_id = implode(" ,", $child_id);
$query = "SELECT * FROM children INNER JOIN doctors ON children.doctor_id=doctors.id WHERE children.id IN ($child_id);";
$result = mysqli_query($db, $query) or die('Error '.mysqli_error($db).' with query '.$query);

$child_info = [];
while($row = mysqli_fetch_assoc($result)) {
    $child_info[] = $row;
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
            <?php foreach ($child_info as $index => $child) { ?>
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

                <h2 class="heading-smaller">Dokter</h2>
                <ul class="list-end">
                    <li class="list-text">Naam: <?= htmlentities($child['doctor_name'])?></li>
                    <li class="list-text">Telefoonnummer: <?= htmlentities($child['doctor_phonenumber'])?></li>
                    <li class="list-text">Verzekeringsmaatschappij: <?= htmlentities($child['insurance'])?></li>
                    <li class="list-text">Polisnummer: <?= htmlentities($child['polis_number'])?></li>
                </ul>
            <?php } ?>
    </div>

</main>

</body>
</html>
