<?php

require('Controls/controls.php');

session_start();

if (isset($_GET['action']) && ($_GET['action'] == 'fightpage')) {
    FightPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'signin')) {
    SignInPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'signup')) {
    SignUpPage();
} else {
    HomePage();  // by default
  }