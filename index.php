<?php

require('controls/controls.php');

if (isset($_GET['action']) && ($_GET['action'] == 'Fightpage')) {
        fightPage();
  } else {
        indexPhp();  // by default
  }