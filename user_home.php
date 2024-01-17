<?php
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
                <a href="index.php" class="dropdown-item">Home</a>
                <a href="#" class="dropdown-item">Inschrijven</a>
                <a href="#" class="dropdown-item">Inschrijvingen</a>
                <a href="#" class="dropdown-item">Kinderen</a>
                <a href="#" class="dropdown-item">Over Ons</a>
                <a href="#" class="dropdown-item">Contact</a>
            </div>
        </div>
    </nav>
</header>


<main>

    <h1 class="title">
        Welkom, [Naam]!
    </h1>

    <div class="button-container">
        <div class="button-t">
            <div>
                <a href="#">
                    <button class="button">Inschrijvingen</button>
                </a>
            </div>
            <div>
                <a href="user_children.php">
                    <button  class="button">Kinderen</button>
                </a>
            </div>
        </div>
        <div>
            <a href="#">
                <button class="button-b" >Inschrijven</button>
            </a>
        </div>

    </div>


</main>

</body>
</html>
