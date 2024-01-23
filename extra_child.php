<?php

require_once 'connection.php';
/** @var mysqli $db */
if(isset($_POST['submit'])){
    $child_name = mysqli_real_escape_string($db, $_POST['child_name']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $special_needs = mysqli_real_escape_string($db, $_POST['special_needs']);
    $date_of_birth = mysqli_real_escape_string($db, $_POST['date_of_birth']);
    $child_bsn = mysqli_real_escape_string($db, $_POST['child_bsn']);
    $child_nationality = mysqli_real_escape_string($db, $_POST['child_nationality']);
    $child_gender = mysqli_real_escape_string($db, $_POST['child_gender']);
    $childVaccinated = isset($_POST['vacinated']) ? 'ja' : 'nee';
    $allergies = mysqli_real_escape_string($db, $_POST['allergies']);

    $query = "INSERT INTO `children`(`id`, `child_name`, `age`, `special_needs`, `date_of_birth`, `child_bsn`, `child_nationality`, `child_gender`, `vaccinated`, `allergies`)
    VALUES ('','$child_name','$age','$special_needs','$date_of_birth','$child_bsn','$child_nationality','$child_gender','$childVaccinated','$allergies')";

    $result = mysqli_query($db, $query);
    if ($result) {
        $succes = "Uw gegevens zijn toegeveogd";
        header('Location: form_2.php');

    } else {
        $errors[$db] = mysqli_error($db);
        header('Location: extra_child.php');
        exit();
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/style.css">
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
                    <h3>Kind informatie</h3>
                    <div class="form_flex">
                        <label for="age"><b>Naam:</b></label>
                        <input type="text" id="age" name="age" required>
                    </div>

                    <div class="form_flex">
                        <label for="date_of_birth"><b>Geboortedatum:</b></label>
                        <input type="date" id="date_of_birth" name="date_of_birth" required>
                    </div>

                    <div class="form_flex" id="bsn">
                        <label for="child-bsn"><b>BSN:</b></label>
                        <input type="number" id="child-bsn" name="child-bsn">
                    </div>

                    <div class="check_radio">
                        <input type="checkbox" id="child-bsn" name="child-bsn">
                        <label for="child-bsn">Mijn kind heeft nog geen BSN nummer</label>
                    </div>

                    <div class="form_flex">
                        <label for="child_nationality"><b>Nationaliteit:</b></label>
                        <input type="text" id="child_nationality" name="child_nationality" required>
                    </div>

                    <div class="check_radio">
                        <label for="child_gender"><b>Geslacht:</b></label>
                        <input type="radio" id="child_gender" name="child_gender">
                        <label for="child_gender">Man</label>
                        <input type="radio" id="child_gender" name="child_gender">
                        <label for="child_gender">Vrouw</label>
                        <input type="radio" id="child_gender" name="child_gender">
                        <label for="child_gender">Anders</label>
                    </div>

                    <div class="form_flex">
                        <label for="allergies"><b>Allergieën:</b></label>
                        <input type="text" id="allergies" name="allergies" required>
                    </div>

                    <div class="check_radio">
                        <input type="checkbox" id="vacinated" name="vacinated">
                        <label for="vacinated">Volgt het vaccinatie programma</label>
                    </div>
                </div>

                <div class="form_flex">
                    <h3>Dokter</h3>
                    <div>
                        <div class="form_flex">
                            <label for="name_docter"><b>Naam:</b></label>
                            <input type="text" id="name_docter" name="name_docter" required>
                        </div>

                        <div class="form_flex">
                            <label for="phonenumber_docter"><b>Telefoonnummer:</b></label>
                            <input type="number" id="phonenumber_docter" name="phonenumber_docter" required>
                        </div>

                        <div class="form_flex">
                            <label for="insurance"><b>Verzekeringsmaatschappij:</b></label>
                            <input type="text" id="insurance" name="insurance" required>
                        </div>

                        <div class="form_flex">
                            <label for="polis_number"><b>Polisnummer:</b></label>
                            <input type="number" id="polis_number" name="polis_number" required>
                        </div>
                    </div>
                </div>

                <div id="submit">
                    <div id="button">
                        <div>
                            <input name="submit_1"" type="submit" value="Voeg nog een kind toe">
                        </div>
                        <div>
                            <input name="submit_2" type="submit" value="Voeg nog een ouder/verzorger toe">
                        </div>
                    </div>
                    <div>
                        <input name="submit_3" type="submit" value="Volgende stap">
                    </div>
                </div>
            </form>
        </section>
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
