<?php

require_once './Modele/modele.php';

// Functions that group fetchs and view
    function HomePage() {
        require './Views/viewHomepage.php';
        // fetchs, ...
    };

    function FightPage() {
        require './Views/viewFightpage.php';
        // fetchs, ...
    };

    function FightPage2vs2() {
        require './Views/viewFightpage2vs2.php';
        // fetchs, ...
    };

    function SignInPage() {
        require './Views/viewSignInpage.php';
        // fetchs, ...
    };

    function SignUpPage() {
        require './Views/viewSignUppage.php';
        // fetchs, ...
    };

    function SignOut() {
        require 'signout.php';
        // fetchs, ...
    };