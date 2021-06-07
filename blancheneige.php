<?php
session_start();
if($_SESSION['access']!="oui") {
    header('Location: ../blancheneige.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Il était une fois</title>
</head>
<body>
    <header>
        <?php require_once './templates/header.php' ?>
    </header>
    <main>
        <div class="centralimg">
            <img src="https://i.pinimg.com/originals/da/10/e2/da10e2c1ae8d41093beec37e81f714cd.jpg" class="centralimgt" />
            <div class="indextext">
            <p>Un jour de plein hiver, une reine était assise à sa fenêtre encadrée de bois d'ébène et cousait. 
                Tout en tirant l'aiguille, elle regardait voler les blancs flocons. Elle se piqua au doigt et 
                trois gouttes de sang tombèrent sur la neige. Ce rouge sur ce blanc faisait si bel effet qu'elle
                 se dit : « Si seulement j'avais un enfant aussi blanc que la neige, aussi rose que le sang, 
                 aussi noir que le bois de ma fenêtre ! » Peu de temps après, une fille lui naquit ; elle était blanche 
                 comme neige, rose comme sang et ses cheveux étaient noirs comme de l'ébène. On l'appela Blanche-Neige.
                Mais la reine mourut en lui donnant le jour.</p>
                <br>
            <p>Au bout d'une année, le roi épousa une autre femme. Elle était très belle ; 
                mais elle était fière et vaniteuse et ne pouvait souffrir que quelqu'un la surpassât 
                en beauté. Elle possédait un miroir magique. Quand elle s'y regardait en disant : 
                « Miroir, miroir joli, qui est la plus belle au pays ? » Le miroir répondait : 
                « Madame la reine, vous êtes la plus belle au pays. » Et elle était contente. 
                Elle savait que le miroir disait la vérité.
            Blanche-Neige, cependant, 
            grandissait et devenait de plus en plus belle. 
            Quand elle eut atteint ses dix-sept ans, elle était déjà plus 
            jolie que le jour et plus belle que la reine elle-même. Un jour que 
            celle-ci demandait au miroir : « Miroir, miroir joli, qui est la plus 
            belle au pays ? » Celui-ci répondit : « Madame la reine, vous êtes la plus belle ici, 
            mais Blanche-Neige est encore mille fois plus belle. » La reine en fut épouvantée. À partir de là, 
            chaque fois qu'elle apercevait Blanche-Neige, son cœur se retournait dans sa poitrine tant elle éprouvait 
            de haine à son égard. Elle en avait perdu le repos, le jour et la nuit.</p>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once './templates/footer.php' ?>
    </footer>
</body>
</html>