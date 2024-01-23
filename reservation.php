<?php
session_start();
require_once 'connection.php';
/** @var mysqli $db  */
//$userID = $_SESSION['reservations_id'];
$userID = $_SESSION['caretakers_id'];
if(isset($_POST['submit'])){

    $date = mysqli_real_escape_string($db, $_POST['date']);
    $monday_morning = isset($_POST['monday_morning']);
    $monday_evening = isset($_POST['monday_afternoon']);
    $tuesday_morning = isset($_POST['tuesday_morning']);
    $tuesday_evening = isset($_POST['tuesday_afternoon']);
    $wednesday_morning = isset($_POST['wednesday_morning']);
    $wednesday_evening = isset($_POST['wednesday_afternoon']);
    $thursday_morning = isset($_POST['thursday_morning']);
    $thursday_evening = isset($_POST['thursday_afternoon']);
    $friday_morning = isset($_POST['friday_morning']);
    $friday_evening = isset($_POST['friday_afternoon']);




//    code van peer coach
    if($monday_morning) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Maandag', '$date', 1)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }

    if($monday_evening) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Maandag', '$date', 0)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }
    if($tuesday_morning) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Dinsdag', '$date', 1)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }
    if($tuesday_evening) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Dinsdag', '$date', 0)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }
    if($wednesday_morning) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Woensdag', '$date', 1)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }
    if($wednesday_evening) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Woensdag', '$date', 0)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }

    if($thursday_morning) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Donderdag', '$date', 1)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }

    if($thursday_evening) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Donderdag', '$date', 0)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }

    if($friday_morning) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Vrijdag', '$date', 1)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }

    if($friday_evening) {
        $query = "INSERT INTO reservations (caretaker_id, day, date, isMorning) VALUES ('$userID','Vrijdag', '$date', 0)";
//        $query = "SELECT id FROM reservations(day, date, isMorning) WHERE "
//        $query = "INSERT INTO child_caretakers(child_id, caretaker_id, reservation_id) VALUES (1, 1, )"
        $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            //header('Location: user_reservations.php');
        }
    }
    if(1 == 1 ){
        header('Location: user_reservations.php');
    }



//    $query = "INSERT INTO reservations (time, date,repeating) VALUES ('$date', $morning, $afternoon)";
//    krijg child id



}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/form.css?v<?php echo(time())?>">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KidzGlobe</title>
</head>
<body>
<nav>
    <div class="logo">
        <img src="images/kidzglobe.png" alt="Kidzglobe">
    </div>

    <div class="dropdown">
        <button class="dropdown-button"><img src="images/dropdown.png"></button>
        <div class="dropdown-menu">
            <a href="" class="dropdown-item">Home</a>
            <a href="#" class="dropdown-item">Reservering Maken</a>
            <a href="#" class="dropdown-item">Contact</a>
            <a href="#" class="dropdown-item">Over Ons</a>
        </div>
    </div>
</nav>

<main>
    <h1><b>Inschrijf formulier</b></h1>
    <section>
        <form action="" method="post">
            <div class="form_flex">
                <h3>Opvang en planning</h3>
                <div class="form_flex">
                    <label for="date"><b>Startdatum:</b></label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="check_radio">
                    <label for="time"><b>Tijdstippen:</b></label>
                    <div id="tijdstippen">
                        <div class="tijdstippen">
                            <label for="maandag"><b>Ma</b></label>
                            <label for="dinsdag"><b>Di</b></label>
                            <label for="woensdag"><b>Wo</b></label>
                            <label for="donderdag"><b>Do</b></label>
                            <label for="vrijdag"><b>Vr</b></label>
                        </div>
                        <div class="tijdstippen">
                            <label for="ochtend"><b>Ochtend</b></label>
                            <input type="checkbox" id="time" name="monday_morning">
                            <input type="checkbox" id="time" name="tuesday_morning" >
                            <input type="checkbox" id="time" name="wednesday_morning" >
                            <input type="checkbox" id="time" name="thursday_morning" >
                            <input type="checkbox" id="time" name="friday_morning" >
                        </div>
                        <div class="tijdstippen">
                            <label for="middag"><b>Middag</b></label>
                            <input type="checkbox" id="time" name="monday_afternoon">
                            <input type="checkbox" id="time" name="tuesday_afternoon">
                            <input type="checkbox" id="time" name="wednesday_afternoon">
                            <input type="checkbox" id="time" name="thursday_afternoon">
                            <input type="checkbox" id="time" name="friday_afternoon">
                        </div>
                    </div>
                </div>
            </div>
            <div id="submit">
                <input type="submit" name="submit" value="Inschrijving afronden">
            </div>
        </form>
    </section>
</main>
</body>
</html>
