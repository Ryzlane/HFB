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

    <footer>This is an awesome footer</footer>
</body>
</html>