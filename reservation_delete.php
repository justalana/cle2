<?php
session_start();

if (!isset($_SESSION['caretakers_id'])) {
    header('Location: user_reservations.php');
    exit();
}

$userID = $_GET['id'];

/** @var mysqli $db */
require_once 'connection.php';

$query = 'SELECT * FROM reservations WHERE id ='.$userID;

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

if(mysqli_num_rows($result) != 1) {
    header(header: 'Location: user_reservations.php');
    exit;
}

if(isset($_POST['submit'])) {
    $query = "DELETE FROM `reservations` WHERE id =" .$userID;

    $result = mysqli_query($db, $query)
    or die('Error '.mysqli_error($db).' with query '.$query);

    header(header: 'Location: user_reservations.php');
    exit;
}

mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Kidzglobe</title>
</head>
<body>
<div class="container px-4">

    <section class="columns is-centered">
        <div class="column is-10">
            <h2 class="title mt-4">Weet je zeker dat je deze inschrijving wilt verwijderen?</h2>

            <form class="column is-6" action="" method="post">

                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <button class="button" name="submit">Verwijder inschrijving</button>
                    </div>
                </div>
            </form>

            <a class="button" href="user_reservations.php">« Ga terug naar overzicht</a>
        </div>
    </section>
</div>
</body>
</html>
