<?php
session_start();
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
            <img src="https://64.media.tumblr.com/4d26769777ac715860e25d7a8537f620/tumblr_ogvdgiM7wQ1ul84xbo1_1280.png" class="centralimgt" />
            <div class="indextext">
            <div class="titreindex">Les contes expliqués par Carl Gustav Jung</div>
            <br>
            <p>Bien qu'il nous semble que la plupart des événements qui nous arrivent surgissent 
                soudain dans notre vie, ils se préparent en réalité au cours d'une longue histoire 
                au sein de notre vie inconsciente. Et, qui plus est, il semble que certains rêves 
                "connaissent" vraiment l'avenir par des moyens ou chemins jusqu'ici complètement inconnus. 
                Toutefois la façon "confuse" qu'ont les rêves de s'exprimer est fort irritante. En effet, 
                si l'esprit du rêve est au courant de tellement de choses, pourquoi ne nous en parle-t-il pas 
                de manière plus claire ? Pourquoi s'adresse-t-il à nous au moyen de mosaïques d'images 
                paraissant souvent dénuées de sens, qu'il nous faut décrypter au prix de pénibles efforts ? 
                Cela explique les réactions très négatives face aux rêves, dont on affirme alors (avec le proverbe) 
                qu'ils ne sont que de "l'écume".<br>
                <br>
            <p>Jung estimait que l'inconscient, en tant que créateur du rêve, 
                ne sait pas exprimer son "savoir" et ses tendances d'une manière plus claire, 
                 et cela non par méchanceté, ni par un empêchement quelconque (soupçonné par la théorie 
                freudienne qui recourt à l'explication par la censure), mais en raison de l'effet d'éteignoir 
                que la conscience exerce sur l'inconscient. Le contenu "illuminateur" du rêve se comporte 
                comme la lueur d'une chandelle qui pâlit dès qu'on allume la lumière électrique de la conscience 
                du moi.</p>
                <br>
                <hr>
                <br>
                <?php if (isset($_SESSION['nom'])): ?>
                    <p>
                    Angela Carter (1940–1992) is one of the boldest and most original writers of the 20th century. 
                    Her work draws on an eclectic range of themes and influences, from gothic fantasy, traditional fairy tales, 
                    Shakespeare and music hall, through Surrealism and the cinema of Godard and Fellini. Carter’s work breaks many 
                    long-established taboos and mores, not least in her forthright realigning of women as central to, and in control of, 
                    their own narratives. Her perfectly crafted stories are often provocative and subversive and many contain graphic 
                    and violent content.
                    </p>
                   <? endif ?>
            </div>
            <img src="https://64.media.tumblr.com/c4875b846349ec27436fa04c3c4efab9/tumblr_ogvdgiM7wQ1ul84xbo6_1280.png" class="centralimgt" />
        </div>
    </main>
    <footer>
        <?php require_once './templates/footer.php' ?>
    </footer>
</body>
</html>