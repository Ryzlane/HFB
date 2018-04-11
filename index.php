<?php

require('Modele/modele.php');
require('Controls/controls.php');

if (isset($_GET['action']) && ($_GET['action'] == 'Fightpage')) {
    FightPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'Signin')) {
    SignInPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'SignUp')) {
    HomePage();
} else {
      SignUpPage();  // by default
  }