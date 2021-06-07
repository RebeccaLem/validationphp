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
        <div class="cadreinscription">
        <div class="titreinscription"><h2>Inscrivez-vous !</h2></div>
        <div id="inscription">
        <form action="./validation.php" method="POST">
            <div>
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="name">
            </div>
         <div>
            <label for="pass">Mot de passe (8 caractères minimum):</label>
            <input type="password" id="pass" name="password" minlength="8" required>
         </div>
            <div>
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email">
            </div>
         <div>
            <label for="start">Date de naissance :</label>
            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
            </div>
    
            <input type="submit" value="Envoyer !">
        </div >
        </form>
        </div>
    </main>
    <footer>
        <?php require_once './templates/footer.php' ?>
    </footer>
</body>
</html>