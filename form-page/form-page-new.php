<?php  ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/form-page/style.new.css">
    <title>form-page</title>
</head>
<body>
<nav>

</nav>
<main>
    <h1>account maken</h1>

    <form class="FormContainer">
        <label for="first-name">Naam:</label>
        <input type="text" id="first-name" name="firstname" placeholder="voornaam" required>

        <label for="E-mail">E-mail:</label>
        <input type="email" id="E-mail" name="E-mail" placeholder="Email" required>

        <label for="Woonplaats">Woonplaats:</label>
        <input type="text" id="woonplaats" name="woonplaats" placeholder="woonplaats" required>

        <label for="password">Woonplaats:</label>
        <input type="password" id="password" name="password" placeholder="password" required>

        <label for="docenten">verstuur naar:</label>
        <select id="docenten" name="docenten">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <input type="checkbox" id="voorwaarden" naam="voorwaarden" value="voorwaarden" <label
                for="voorwaarden">ik ga akoord met de algemene voorwaarden</label>
        <button type="submit">versturen</button>
    </form>
</main>
</body>
</html>
