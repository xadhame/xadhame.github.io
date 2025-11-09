<?php
include("connexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn,"DELETE FROM etudiants WHERE id=$id");
}

header("Location: liste.php");
exit;
?>
