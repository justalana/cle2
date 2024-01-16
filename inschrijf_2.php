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
                                <input type="checkbox" id="time" name="morning[]" value="monday">
                                <input type="checkbox" id="time" name="morning[]" value="tuesday" >
                                <input type="checkbox" id="time" name="morning[]" value="wednesday" >
                                <input type="checkbox" id="time" name="morning[]" value="thursday" >
                                <input type="checkbox" id="time" name="morning[]" value="friday" >
                            </div>
                            <div class="tijdstippen">
                                <label for="middag"><b>Middag</b></label>
                                <input type="checkbox" id="time" name="afternoon[]" value="monday">
                                <input type="checkbox" id="time" name="afternoon[]" value="tuesday">
                                <input type="checkbox" id="time" name="afternoon[]" value="wednesday">
                                <input type="checkbox" id="time" name="afternoon[]" value="thursday">
                                <input type="checkbox" id="time" name="afternoon[]" value="friday">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="submit">
                    <input onclick="window.location.href='user_home.php';" type="submit" value="Inschrijving afronden">
                </div>
            </form>
        </section>
    </main>
</body>
</html>
