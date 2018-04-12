<?php

require_once './modele/modele.php';

// Functions that group fetchs and view
    function HomePage() {
        require './views/viewhomepage.php';
        // fetchs, ...
    };

    function FightPage() {
        require './views/viewfightpage.php';
        // fetchs, ...
    };

    function FightPage2vs2() {
        require './views/viewfightpage2vs2.php';
        // fetchs, ...
    };

    function SignInPage() {
        require './views/viewsigninpage.php';
        // fetchs, ...
    };

    function SignUpPage() {
        require './views/viewsignuppage.php';
        // fetchs, ...
    };

    function ForgottenPage() {
        require './Views/viewforgottenpassword.php';
        // fetchs, ...
    };

    function SignOut() {
        require 'signout.php';
        // fetchs, ...
    };