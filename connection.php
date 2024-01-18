<?php

//$host       = "localhost";
//$username       = "prj_2023_2024_ressys_t12";
//$password   = "eethaeng";
//$database   = "prj_2023_2024_ressys_t12";
// gegevens online database
$host       = "localhost";
$username       = "root";
$password   = "";
$database   = "prj_2023_2024_ressys_t12";

$db = mysqli_connect($host, $username, $password, $database)
or die("Error: " . mysqli_connect_error());
// Stap 1: Verbinding leggen met de database
// Stap 2: Foutafhandeling. Als verbinding niet gelukt is, wordt
//         "or die" uitgevoerd. Deze stopt de code en toont de
//         foutmelding op het scherm
// local databse

