<?php
require_once 'connection.php';
/** @var mysqli $db */

if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $relation = mysqli_real_escape_string($db, $_POST['relation']);
    $caretaker_name = mysqli_real_escape_string($db, $_POST['caretaker_name']);
    $caretaker_age = mysqli_real_escape_string($db, $_POST['caretaker_age']);
    $caretaker_bsn = mysqli_real_escape_string($db, $_POST['caretaker_bsn']);
    $caretaker_nationality = mysqli_real_escape_string($db, $_POST['caretaker_nationality']);
    $birth_country = mysqli_real_escape_string($db, $_POST['birth_country']);
    $caretaker_gender = mysqli_real_escape_string($db, $_POST['caretaker_gender']);
    $degree = mysqli_real_escape_string($db, $_POST['degree']);
    $job = mysqli_real_escape_string($db, $_POST['job']);
    $caretaker_phonenumber = mysqli_real_escape_string($db, $_POST['caretaker_phonenumber']);
    $adres = mysqli_real_escape_string($db, $_POST['adres']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $residence = mysqli_real_escape_string($db, $_POST['residence']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "INSERT INTO `caretakers`(`id`, `email`, `password`, `relation`, `caretaker_name`, `caretaker_bsn`, `caretaker_nationality`, `birth_country`, `caretaker_gender`, `degree`, `job`, `caretaker_phonenumber`, `adres`, `postcode`, `residence`) 
VALUES ('','$email','$password','$relation','$caretaker_name','$caretaker_bsn','$caretaker_nationality','$birth_country','$caretaker_gender','$degree','$job','$caretaker_phonenumber','$adres','$postcode','$residence')";

    $result = mysqli_query($db, $query);
    if ($result) {
        $succes = "Uw gegevens zijn toegeveogd";
        header('Location: form_1.php');

    } else {
        $errors[$db] = mysqli_error($db);
        header('Location: extra_parent.php');
        exit();
    }

//database sluiten
    mysqli_close($db);
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
                <div id="h3">
                    <h3 class="h3">Contactverwoordelijke</h3>
                    <h3 class="h3">ouder/verzorger</h3>
                </div>

                <div class="form_flex">
                    <label for="relation"><b>Relatie:</b></label>
                    <div class="check_radio">
                        <input type="radio" id="relation" name="relation">
                        <label for="relation">Moeder</label>
                        <input type="radio" id="relation" name="relation">
                        <label for="relation">Vader</label>
                    </div>
                    <div class="check_radio">
                        <input type="radio" id="relation" name="relation">
                        <label for="relation">Verzorger</label>
                        <input type="radio" id="relation" name="relation">
                        <label for="relation">Anders</label>
                    </div>
                </div>

                <div class="form_flex">
                    <label for="name_caretaker"><b>Naam:</b></label>
                    <input type="text" id="caretaker_name" name="caretaker_name" required>
                </div>

                <div class="form_flex">
                    <label for="Dateofbirth_caretaker"><b>Geboortedatum:</b></label>
                    <input type="date" id="Dateofbirth_caretaker" name="Dateofbirth_caretaker" required>
                </div>

                <div class="form_flex">
                    <label for="bsn_caretaker"><b>BSN:</b></label>
                    <input type="number" id="caretaker_bsn" name="caretaker_bsn" required>
                </div>

                <div class="form_flex">
                    <label for="nationality_caretaker"><b>Nationaliteit:</b></label>
                    <input type="text" id="caretaker_nationality" name="caretaker_nationality" required>
                </div>

                <div class="form_flex">
                    <label for="birth_country"><b>Geboorteland:</b></label>
                    <input type="text" id="birth_country" name="birth_country" required>
                </div>

                <div class="form_flex">
                    <div class="check_radio">
                        <label for="caretaker_gender"><b>Geslacht:</b></label>
                        <input type="radio" id="caretaker_gender" name="caretaker_gender">
                        <label for="caretaker_gender">Man</label>
                        <input type="radio" id="caretaker_gender" name="caretaker_gender">
                        <label for="caretaker_gender">Vrouw</label>
                        <input type="radio" id="caretaker_gender" name="caretaker_gender">
                        <label for="caretaker_gender">Anders</label>
                    </div>
                </div>


                <div class="form_flex">
                    <label for="degree"><b>Opleiding:</b></label>
                    <input type="text" id="degree" name="degree" required>
                </div>

                <div class="form_flex">
                    <label for="job"><b>Beroep:</b></label>
                    <input type="text" id="job" name="job" required>
                </div>

                <div class="form_flex">
                    <label for="email"><b>Email:</b></label>
                    <input type="text" id="email" name="email" required>
                </div>

                <div class="form_flex">
                    <label for="caretaker_phonenumber"><b>Telefoonnummer:</b></label>
                    <input type="number" id="caretaker_phonenumber" name="caretaker_phonenumber" required>
                </div>

                <div class="form_flex">
                    <label for="adres"><b>Adres:</b></label>
                    <input type="text" id="adres" name="adres" required>
                </div>

                <div class="form_flex">
                    <label for="postcode"><b>Postcode:</b></label>
                    <input type="text" id="postcode" name="postcode" required>
                </div>

                <div class="form_flex">
                    <label for="residence"><b>Woonplaats:</b></label>
                    <input type="text" id="residence" name="residence" required>
                </div>
            </div>

            <div class="form_flex">
                 <label for="password"><b>Wachtwoord:</b></label>
                 <input type="text" id="password" name="password" required>
            </div>
            </div>
            <div id="submit">
                <div id="button">
                    <div>
                        <input name="submit_1" type="submit" value="Voeg nog een kind toe">
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