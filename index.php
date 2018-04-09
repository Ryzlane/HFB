<?php

require('Controls/controls.php');

if (isset($_GET['action']) && ($_GET['action'] == 'Fightpage')) {
        fightPage();
  } else {
        indexPhp();  // by default
  }