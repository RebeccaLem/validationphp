<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Il était une fois</title>
</head>
<body>
    <header>
        <?php require_once './templates/header.php' ?>
    </header>
    <main>
       <h2>Tu es bien inscrit.e sur le site</h2>
    </main>
    <footer>
        <?php require_once './templates/footer.php' ?>
    </footer>
</body>
</html>