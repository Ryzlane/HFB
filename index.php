<?php

require('Controls/controls.php');

session_start();

if (isset($_GET['action']) && ($_GET['action'] == 'fightpage')) {
    FightPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'fightpage2vs2')) {
    FightPage2vs2();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'signin')) {
    SignInPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'signup')) {
    SignUpPage();
} elseif (isset($_GET['action']) && ($_GET['action'] == 'signout')) {
    SignOut();
  } else {
    HomePage();  // by default
  }