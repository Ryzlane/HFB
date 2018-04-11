<!-- This page is a TEMPLATE, unusable alone. 
It contains content common to all pages. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,700|Montserrat:400,700" rel="stylesheet">
    <title><?= $title; ?></title>
</head>
<body>
    <header>
        <!-- <img src="#" alt="logo"> -->
        <span class="header__sign">
            <a href="#" class="sign__sign-up">Sign up</a>
            <a href="#" class="sign__sign-in">Sign in</a>
        </span>
    </header>
    
    <?= $content; ?>

    <footer>
        <div class="footer__law"><p>INTERDICTION VOLONTAIRE DE JEUX<br /><br/ >Toute personne souhaitant faire l'objet d'une interdiction de jeux doit le faire elle-même auprès du ministère de l'intérieur. Cette interdiction est valable dans les casinos, les cercles de jeux et sur les sites de jeux en ligne autorisés en vertu de la loi n° 2010-476 du 12 mai 2010. Elle est prononcée pour une durée de trois ans non réductible.</p></div>
        <div class="footer__copyright"><p>Heroes Fight Bet Copyright © 2018 - Tous droits réservés - Reproduction interdite</p></div>
    </footer>
</body>
</html>