<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="form.css">
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
                <div>
                    <h3>Kind informatie</h3>
                    <div class="form_flex">
                            <label for="naam"><b>Naam:</b></label>
                            <input type="text" id="naam" name="naam" required>
                    </div>

                    <div class="form_flex">
                        <label for="geboortedatum"><b>Geboortedatum:</b></label>
                        <input type="date" id="geboortedatum" name="geboortedatum" required>
                    </div>

                    <div class="form_flex">
                        <label for="bsn"><b>BSN:</b></label>
                        <input type="text" id="bsn" name="bsn">
                    </div>

                    <div>
                        <input type="checkbox" id="bsn" name="bsn">
                        <label for="bsn">Mijn kind heeft nog geen BSN nummer</label>
                    </div>

                    <div class="form_flex">
                        <label for="nationaliteit"><b>Nationaliteit:</b></label>
                        <input type="text" id="nationaliteit" name="nationaliteit" required>
                    </div>

                    <div>
                        <label for="geslacht"><b>Geslacht:</b></label>
                        <input type="radio" id="geslacht" name="geslacht">
                        <label for="geslacht">Man</label>
                        <input type="radio" id="geslacht" name="geslacht">
                        <label for="geslacht">Vrouw</label>
                        <input type="radio" id="geslacht" name="geslacht">
                        <label for="geslacht">Anders</label>
                    </div>
                </div>

                <div>
                    <h3>Dokter</h3>
                    <div>
                        <div class="form_flex">
                            <label for="naam"><b>Naam:</b></label>
                            <input type="text" id="naam" name="naam" required>
                        </div>

                        <div class="form_flex">
                            <label for="telefoonnummer"><b>Telefoonnummer:</b></label>
                            <input type="text" id="telefoonnummer" name="telefoonnummer" required>
                        </div>

                        <div class="form_flex">
                            <label for="verzekeringsmaatschappij"><b>Verzekeringsmaatschappij:</b></label>
                            <input type="text" id="verzekeringsmaatschappij" name="verzekeringsmaatschappij" required>
                        </div>

                        <div class="form_flex">
                            <label for="polisnummer"><b>Polisnummer:</b></label>
                            <input type="text" id="polisnummer" name="polisnummer" required>
                        </div>

                        <div class="form_flex">
                            <label for="allergieën"><b>Allergieën:</b></label>
                            <input type="text" id="allergieën" name="allergieën" required>
                        </div>

                        <div>
                            <input type="checkbox" id="vaccinatie" name="vaccinatie">
                            <label for="vaccinatie">Volgt het vaccinatie programma</label>
                        </div>
                    </div>

                    <div>
                        <h3>Contactverwoordelijke ouder/verzorger</h3>
                        <div>
                            <label for="relatie"><b>Relatie:</b></label>
                            <div>
                                <input type="radio" id="relatie" name="relatie">
                                <label for="relatie">Moeder</label>
                                <input type="radio" id="relatie" name="relatie">
                                <label for="relatie">Vader</label>
                            </div>
                            <div>
                                <input type="radio" id="relatie" name="relatie">
                                <label for="relatie">Verzorger</label>
                                <input type="radio" id="relatie" name="relatie">
                                <label for="relatie">Anders</label>
                            </div>
                        </div>

                        <div class="form_flex">
                            <label for="naam"><b>Naam:</b></label>
                            <input type="text" id="naam" name="naam" required>
                        </div>

                        <div class="form_flex">
                            <label for="geboortedatum"><b>Geboortedatum:</b></label>
                            <input type="date" id="geboortedatum" name="geboortedatum" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>BSN:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="nationaliteit"><b>Nationaliteit:</b></label>
                            <input type="text" id="nationaliteit" name="nationaliteit" required>
                        </div>

                        <div class="form_flex">
                            <label for="nationaliteit"><b>Geboorteland:</b></label>
                            <input type="text" id="nationaliteit" name="nationaliteit" required>
                        </div>

                        <div>
                            <label for="geslacht"><b>Geslacht:</b></label>
                            <input type="radio" id="geslacht" name="geslacht">
                            <label for="geslacht">Man</label>
                            <input type="radio" id="geslacht" name="geslacht">
                            <label for="geslacht">Vrouw</label>
                            <input type="radio" id="geslacht" name="geslacht">
                            <label for="geslacht">Anders</label>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Opleiding:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Beroep:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Email:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Telefoonnummer:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Adres:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Postcode:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>

                        <div class="form_flex">
                            <label for="bsn"><b>Woonplaats:</b></label>
                            <input type="text" id="bsn" name="bsn" required>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="button">
                        <div>
                            <input type="button" value="Voeg nog een kind toe">
                        </div>
                        <div>
                            <input type="button" value="Voeg nog een ouder/verzorger toe">
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Volgende stap">
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
