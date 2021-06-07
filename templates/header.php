<header>
    <nav id="navbar">
        <ul>
            <li class=""><a href="index.php">Accueil</a></li>
            <li class=""><a href="./inscription.php">Inscriptions</a></li>
            

            <?php if(isset($_SESSION['nom'])):?>
                <li class=""><a href="./blancheneige.php">Blanche-Neige</a></li>
                <li class=""><a href="./controllers/deconnexion.php">Deconnexion</a></li>
            

            <?php else: ?> 
                <li class=""><a href="./connexion.php">Connexion</a></li>
            <?php endif ?>

        </ul>
    </nav>
</header>
