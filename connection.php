<?php

$host       = "localhost";
$database   = "prj_2023_2024_ressys_t12";
$user       = "root";
$password   = "prj_2023_2024_ressys_t12";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());
