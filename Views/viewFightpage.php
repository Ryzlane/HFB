<?php $title = 'HFB | Fight'; ?>


<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id="fight">
        <div class="bg-video"><video playsinline autoplay muted loop><source src="Images/background.mp4" type="video/mp4"></video></div>
        <div class="players__container">

        </div>
        <span class="fight__timer">01:03</span>
        <!-- FIRST PLAYER -->
        <div class="fight__first-player">
            <h1 class="player__name">GAMORA</h1>
            <div class="first-player__container">
                <div class="first-player--color"></div>
                <img src="Images/gamora.png" width="100%" alt="">
            </div>
            <span class="bet--first-player"><a href="#">Bet</a></span>
            <p class="player__desc">Occupation: assassin<br />Race: Zen-Whoberian</p>
        </div>
        <!-- SECOND PLAYER -->
        <div class="fight__second-player">
            <h1 class="player__name">BATMAN</h1>
            <div class="second-player__container">
                <div class="second-player--color"></div>
                <img src="Images/batman.png" width="100%" alt="">
            </div>
            <span class="bet--second-player"><a href="#">Bet</a></span>
            <p class="player__desc">Occupation: businessman<br />Race: human</p>
        </div>
    </section>
    <section id="game-interface">
        <div class="game-interface__title-block"><h1 class="game-interface__title">Chances of victory</h1></div>
        <div class="game-interface__all-percentage">
            <div class="percentage--first-player"><span class="first-player--cote">02,20</span></div>
            <div class="percentage--second-player"><span class="second-player--cote">01,23</span></div>
        </div>
    </section>


    <section id="chatbox">
        <div class="chatbox__title-block"><h1 class="chatbox__title">Chatbox</h1></div>
            <table class="chatbox__form">
                <tr>
                    <td ><input class="chatbox__message" placeholder="Type a message..." type="textarea"></td>
                    <td class="chatbox__send"><input type="submit"></td>
                </tr>
            </table>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>