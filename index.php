<?php

require('Modele/modele.php');
require('Controls/controls.php');

if (isset($_GET['action']) && ($_GET['action'] == 'Fightpage')) {
      HomePage();
  } elseif (isset($_GET['action']) && ($_GET['action'] == 'Logpage')) {
      LogPage();
  } else {
      FightPage();  // by default
  }