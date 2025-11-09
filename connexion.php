<?php
$servername = "sql112.infinityfree.com";
$username = "if0_39141472";
$password = "nITneHBcJs";
$dbname = "if0_39141472_etudiants_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

?>
