<?php

session_start();

if(isset($_POST['pseudo']) == "Celestial" && $_POST['password'] == "password") {
    $_SESSION['access'] = 'oui';
    $_SESSION['nom'] = $_POST['pseudo'];
    $_SESSION['isConnected'] = true;
    header('Location: ../index.php');
}

$_SESSION['access'] = true;