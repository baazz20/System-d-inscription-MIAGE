<?php

$sname = "localhost";
$unmae = "root";
$password = "";

$db_name = "miage_inscription";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Echec de connexion!";
}