<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/inscription.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Identification</title>
</head>

<body>
    <?php require_once './templates/header.php' ?>
    <main>
        <h2>Connecte toi</h2>
    <div id="connexion">
        <form action="./controllers/sessions.php" method="post">
            <div>
                <label for="">Votre login : </label>
                <input type="text" name="pseudo" id="name" value="jean">
            </div>
            <div>
                <label for="">Votre mot de passe :</label>
                <input type="password" name="password" id="pwd" value="">
            </div>
            <input type="submit" value="Connexion">
            </form>
            </div>
    </main>
    <footer>
        <?php require_once './templates/footer.php' ?>
    </footer>
</body>
</html>