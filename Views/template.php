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
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><?= $title; ?></title>
</head>
<body>
    <header>
        <h1 class="header__logo"><a href="./">HEROFIGHT<span class="logo--red">BET</span></a></h1>
        <?php if(!isset($_SESSION['pseudo'])):?>
        <span class="header__sign">
            <a href="./?action=signup" class="sign__sign-up">Sign up</a>
            <a href="./?action=signin" class="sign__sign-in">Sign in</a>
        </span>
    <?php endif;?>
    <?php if(isset($_SESSION['pseudo'])):?>
        <table class="header__connected">
            <tr>
                <td> <p class="connected__coins"><?=$_SESSION['wallet']?> coins</p></td>
                <td><div class="connected__picture"><img src="https://ui-avatars.com/api/?name=<?=$_SESSION['pseudo']?>&background=4d669f&color=fff&rounded=true&size=25&length=1&font-size=0.6" alt="avatar"></div></td>
                <td><p class="connected__username"><?=$_SESSION['pseudo']?></p></td>
                <td><a class="connected__sign-out" href="./?action=signout"><i class="fas fa-power-off"></i></a></td>
            </tr>
        </table>
    <?php endif;?>
    </header>
    
    <?= $content; ?>

    <footer>
        <div class="footer__law"><p>INTERDICTION VOLONTAIRE DE JEUX<br /><br/ >Toute personne souhaitant faire l'objet d'une interdiction de jeux doit le faire elle-même auprès du ministère de l'intérieur. Cette interdiction est valable dans les casinos, les cercles de jeux et sur les sites de jeux en ligne autorisés en vertu de la loi n° 2010-476 du 12 mai 2010. Elle est prononcée pour une durée de trois ans non réductible.</p></div>
        <div class="footer__copyright"><p>Heroes Fight Bet Copyright © 2018 - Tous droits réservés - Reproduction interdite</p></div>
    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>