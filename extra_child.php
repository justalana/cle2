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

                <div id="submit">
                    <div id="button">
                        <div>
                            <input onclick="window.location.href='extra_child.php';" type="submit" value="Voeg nog een kind toe">
                        </div>
                        <div>
                            <input onclick="window.location.href='extra_parent.php';" type="submit" value="Voeg nog een ouder/verzorger toe">
                        </div>
                    </div>
                    <div>
                        <input onclick="window.location.href='form_2.php';" type="submit" value="Volgende stap">
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
