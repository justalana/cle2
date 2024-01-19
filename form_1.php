<?php
session_start();
require_once 'connection.php';
/** @var mysqli $db */
// Retrieve user information based on the user ID stored in the session
$userID = $_SESSION['caretakers_id'];


if (isset($_POST['submit_3'])) {
//    $child_name = mysqli_real_escape_string($db, $_POST['child_name']);
//    $age = mysqli_real_escape_string($db, $_POST['age']);
//    $special_needs = mysqli_real_escape_string($db, $_POST['special_needs']);
//    $date_of_birth = mysqli_real_escape_string($db, $_POST['date_of_birth']);
//    $child_bsn = mysqli_real_escape_string($db, $_POST['child_bsn']);
//    $child_nationality = mysqli_real_escape_string($db, $_POST['child_nationality']);
//    $child_gender = mysqli_real_escape_string($db, $_POST['child_gender']);
//    $childVaccinated = isset($_POST['vacinated']) ? 'ja' : 'nee';
//    $allergies = mysqli_real_escape_string($db, $_POST['allergies']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $relation = mysqli_real_escape_string($db, $_POST['relation']);
    $caretaker_name = mysqli_real_escape_string($db, $_POST['caretaker_name']);
    $caretaker_age = mysqli_real_escape_string($db, $_POST['caretaker_age']);
    $caretaker_bsm = mysqli_real_escape_string($db, $_POST['caretaker_bsm']);
    $caretaker_nationality = mysqli_real_escape_string($db, $_POST['caretaker_nationality']);
    $birth_country = mysqli_real_escape_string($db, $_POST['birth_country']);
    $caretaker_gender = mysqli_real_escape_string($db, $_POST['caretaker_gender']);
    $degree = mysqli_real_escape_string($db, $_POST['degree']);
    $job = mysqli_real_escape_string($db, $_POST['job']);
    $caretaker_phonenumber = mysqli_real_escape_string($db, $_POST['caretaker_phonenumber']);
    $adres = mysqli_real_escape_string($db, $_POST['adres']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $residence = mysqli_real_escape_string($db, $_POST['residence']);
// werkt niet   $doctor_phonenumber = mysqli_real_escape_string($db, $_POST['doctor_phonenumber']);
    $insurance = mysqli_real_escape_string($db, $_POST['insurance']);
    $polis_number = mysqli_real_escape_string($db, $_POST['polis_number']);
// werkt niet    $doctor_name = mysqli_real_escape_string($db, $_POST['doctor_name']);


    $errors = [];
//    if ($child_name == "") {
//        $errors['child_name'] = "Vul de naam van je kind";
//    }
//    if (empty($errors)) {
//        $child_query = "INSERT INTO children (name, date_of_birth, bsn, nationality, gender, allergies, vaccinated)
//        VALUES ('$child_name', '$date_of_birth', '$child_bsn', '$child_nationality', $child_gender, '$allergies', '$childVaccinated' )";
       $query = "UPDATE caretakers SET caretaker_name = '$caretaker_name', caretaker_age = '$caretaker_age', relation = '$relation', caretaker_bsn = '$caretaker_bsm', caretaker_nationality = '$caretaker_nationality', birth_country = '$birth_country', caretaker_gender = '$caretaker_gender', degree = '$degree', job = '$job', email = '$email', caretaker_phonenumber = '$caretaker_phonenumber', adres = '$adres', postcode = '$postcode', residence = '$residence' WHERE id = '$userID'";

       $result = mysqli_query($db, $query);
        if ($result) {
            $succes = "Uw gegevens zijn toegeveogd";
            header('Location: form_2.php');

        }
        else {
            $errors[$db] = mysqli_error($db);
            header('Location: index.php');
            exit();
        }

}
if (isset($_POST['submit_2'])) {
//    $child_name = mysqli_real_escape_string($db, $_POST['child_name']);
//    $age = mysqli_real_escape_string($db, $_POST['age']);
//    $special_needs = mysqli_real_escape_string($db, $_POST['special_needs']);
//    $date_of_birth = mysqli_real_escape_string($db, $_POST['date_of_birth']);
//    $child_bsn = mysqli_real_escape_string($db, $_POST['child_bsn']);
//    $child_nationality = mysqli_real_escape_string($db, $_POST['child_nationality']);
//    $child_gender = mysqli_real_escape_string($db, $_POST['child_gender']);
//    $childVaccinated = isset($_POST['vacinated']) ? 'ja' : 'nee';
//    $allergies = mysqli_real_escape_string($db, $_POST['allergies']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $relation = mysqli_real_escape_string($db, $_POST['relation']);
    $caretaker_name = mysqli_real_escape_string($db, $_POST['caretaker_name']);
    $caretaker_age = mysqli_real_escape_string($db, $_POST['caretaker_age']);
    $caretaker_bsm = mysqli_real_escape_string($db, $_POST['caretaker_bsm']);
    $caretaker_nationality = mysqli_real_escape_string($db, $_POST['caretaker_nationality']);
    $birth_country = mysqli_real_escape_string($db, $_POST['birth_country']);
    $caretaker_gender = mysqli_real_escape_string($db, $_POST['caretaker_gender']);
    $degree = mysqli_real_escape_string($db, $_POST['degree']);
    $job = mysqli_real_escape_string($db, $_POST['job']);
    $caretaker_phonenumber = mysqli_real_escape_string($db, $_POST['caretaker_phonenumber']);
    $adres = mysqli_real_escape_string($db, $_POST['adres']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $residence = mysqli_real_escape_string($db, $_POST['residence']);
// werkt niet   $doctor_phonenumber = mysqli_real_escape_string($db, $_POST['doctor_phonenumber']);
    $insurance = mysqli_real_escape_string($db, $_POST['insurance']);
    $polis_number = mysqli_real_escape_string($db, $_POST['polis_number']);
// werkt niet    $doctor_name = mysqli_real_escape_string($db, $_POST['doctor_name']);


    $errors = [];
//    if ($child_name == "") {
//        $errors['child_name'] = "Vul de naam van je kind";
//    }
//    if (empty($errors)) {
//        $child_query = "INSERT INTO children (name, date_of_birth, bsn, nationality, gender, allergies, vaccinated)
//        VALUES ('$child_name', '$date_of_birth', '$child_bsn', '$child_nationality', $child_gender, '$allergies', '$childVaccinated' )";
    $query = "UPDATE caretakers SET caretaker_name = '$caretaker_name', caretaker_age = '$caretaker_age', relation = '$relation', caretaker_bsn = '$caretaker_bsm', caretaker_nationality = '$caretaker_nationality', birth_country = '$birth_country', caretaker_gender = '$caretaker_gender', degree = '$degree', job = '$job', email = '$email', caretaker_phonenumber = '$caretaker_phonenumber', adres = '$adres', postcode = '$postcode', residence = '$residence' WHERE id = '$userID'";

    $result = mysqli_query($db, $query);
    if ($result) {
        $succes = "Uw gegevens zijn toegeveogd";
        header('Location: extra_parent.php');

    }
}
if (isset($_POST['submit_1'])) {
//    $child_name = mysqli_real_escape_string($db, $_POST['child_name']);
//    $age = mysqli_real_escape_string($db, $_POST['age']);
//    $special_needs = mysqli_real_escape_string($db, $_POST['special_needs']);
//    $date_of_birth = mysqli_real_escape_string($db, $_POST['date_of_birth']);
//    $child_bsn = mysqli_real_escape_string($db, $_POST['child_bsn']);
//    $child_nationality = mysqli_real_escape_string($db, $_POST['child_nationality']);
//    $child_gender = mysqli_real_escape_string($db, $_POST['child_gender']);
//    $childVaccinated = isset($_POST['vacinated']) ? 'ja' : 'nee';
//    $allergies = mysqli_real_escape_string($db, $_POST['allergies']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $relation = mysqli_real_escape_string($db, $_POST['relation']);
    $caretaker_name = mysqli_real_escape_string($db, $_POST['caretaker_name']);
    $caretaker_age = mysqli_real_escape_string($db, $_POST['caretaker_age']);
    $caretaker_bsm = mysqli_real_escape_string($db, $_POST['caretaker_bsm']);
    $caretaker_nationality = mysqli_real_escape_string($db, $_POST['caretaker_nationality']);
    $birth_country = mysqli_real_escape_string($db, $_POST['birth_country']);
    $caretaker_gender = mysqli_real_escape_string($db, $_POST['caretaker_gender']);
    $degree = mysqli_real_escape_string($db, $_POST['degree']);
    $job = mysqli_real_escape_string($db, $_POST['job']);
    $caretaker_phonenumber = mysqli_real_escape_string($db, $_POST['caretaker_phonenumber']);
    $adres = mysqli_real_escape_string($db, $_POST['adres']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $residence = mysqli_real_escape_string($db, $_POST['residence']);
// werkt niet   $doctor_phonenumber = mysqli_real_escape_string($db, $_POST['doctor_phonenumber']);
    $insurance = mysqli_real_escape_string($db, $_POST['insurance']);
    $polis_number = mysqli_real_escape_string($db, $_POST['polis_number']);
// werkt niet    $doctor_name = mysqli_real_escape_string($db, $_POST['doctor_name']);


    $errors = [];
//    if ($child_name == "") {
//        $errors['child_name'] = "Vul de naam van je kind";
//    }
//    if (empty($errors)) {
//        $child_query = "INSERT INTO children (name, date_of_birth, bsn, nationality, gender, allergies, vaccinated)
//        VALUES ('$child_name', '$date_of_birth', '$child_bsn', '$child_nationality', $child_gender, '$allergies', '$childVaccinated' )";
    $query = "UPDATE caretakers SET caretaker_name = '$caretaker_name', caretaker_age = '$caretaker_age', relation = '$relation', caretaker_bsn = '$caretaker_bsm', caretaker_nationality = '$caretaker_nationality', birth_country = '$birth_country', caretaker_gender = '$caretaker_gender', degree = '$degree', job = '$job', email = '$email', caretaker_phonenumber = '$caretaker_phonenumber', adres = '$adres', postcode = '$postcode', residence = '$residence' WHERE id = '$userID'";

    $result = mysqli_query($db, $query);
    if ($result) {
        $succes = "Uw gegevens zijn toegeveogd";
        header('Location: extra_child.php');

    }
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
                    <h3>Kind informatie</h3>
                    <div class="form_flex">
                            <label for="age_child"><b>Naam:</b></label>
                            <input type="text" id="age_child" name="age_child" required>
                    </div>

                    <div class="form_flex">
                        <label for="Dateofbirth_child"><b>Geboortedatum:</b></label>
                        <input type="date" id="Dateofbirth_child" name="Dateofbirth_child" required>
                    </div>

                    <div class="form_flex" id="bsn">
                        <label for="bsn_child"><b>BSN:</b></label>
                        <input type="text" id="bsn_child" name="bsn_child">
                    </div>

                    <div class="check_radio">
                        <input type="checkbox" id="bsn_child" name="bsn_child">
                        <label for="bsn_child">Mijn kind heeft nog geen BSN nummer</label>
                    </div>

                    <div class="form_flex">
                        <label for="nationality"><b>Nationaliteit:</b></label>
                        <input type="text" id="nationality" name="nationality" required>
                    </div>

                    <div class="check_radio">
                        <label for="gender"><b>Geslacht:</b></label>
                        <input type="radio" id="gender" name="gender">
                        <label for="gender">Man</label>
                        <input type="radio" id="gender" name="gender">
                        <label for="gender">Vrouw</label>
                        <input type="radio" id="gender" name="gender">
                        <label for="gender">Anders</label>
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
                            <input type="text" id="phonenumber_docter" name="phonenumber_docter" required>
                        </div>

                        <div class="form_flex">
                            <label for="insurance"><b>Verzekeringsmaatschappij:</b></label>
                            <input type="text" id="insurance" name="insurance" required>
                        </div>

                        <div class="form_flex">
                            <label for="polis_number"><b>Polisnummer:</b></label>
                            <input type="text" id="polis_number" name="polis_number" required>
                        </div>
                    </div>
                </div>

                <div class="form_flex">
                    <div id="h3">
                        <h3 class="h3">Contactverwoordelijke</h3>
                        <h3 class="h3">ouder/verzorger</h3>
                    </div>

                    <div class="form_flex">
                        <label for="relation"><b>Relatie:</b></label>
                        <div class="check_radio">
                            <input type="radio" id="relation" name="relation" value="Moeder">
                            <label for="relation">Moeder</label>
                            <input type="radio" id="relation" name="relation" value="Vader">
                            <label for="relation">Vader</label>
                        </div>
                        <div class="check_radio">
                            <input type="radio" id="relation" name="relation" value="Verzorger">
                            <label for="relation">Verzorger</label>
                            <input type="radio" id="relation" name="relation" value="Anders">
                            <label for="relation">Anders</label>
                        </div>
                    </div>

                    <div class="form_flex">
                        <label for="name_caretaker"><b>Naam:</b></label>
                        <input type="text" id="caretaker_name" name="caretaker_name" required>
                    </div>

                    <div class="form_flex">
                        <label for="Dateofbirth_caretaker"><b>Geboortedatum:</b></label>
                        <input type="date" id="caretaker_age" name="caretaker_age" required>
                    </div>

                    <div class="form_flex">
                        <label for="bsn_caretaker"><b>BSN:</b></label>
                        <input type="text" id="caretaker_bsm" name="caretaker_bsm" required>
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
                            <input type="radio" id="caretaker_gender" name="caretaker_gender" value="Man">
                            <label for="gender_caretaker">Man</label>
                            <input type="radio" id="caretaker_gender" name="caretaker_gender" value="Vrouw">
                            <label for="gender_caretaker">Vrouw</label>
                            <input type="radio" id="caretaker_gender" name="caretaker_gender" value="Anders">
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
                        <label for="phonenumber_caretaker"><b>Telefoonnummer:</b></label>
                        <input type="text" id="caretaker_phonenumber" name="caretaker_phonenumber" required>
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
