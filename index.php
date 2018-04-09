<?php

require('Modele/modele.php');
require('Controls/controls.php');

if (isset($_GET['action']) && ($_GET['action'] == 'Fightpage')) {
        FightPage();
  } else {
        HomePage();  // by default
  }