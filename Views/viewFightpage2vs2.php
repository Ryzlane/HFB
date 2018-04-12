<?php $title = 'HFB | Fight 2vs2'; ?>


<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id="fight">
        <div class="bg-video"><div class="bg-video--content"></div><video playsinline autoplay muted loop><source src="Images/background.mp4" type="video/mp4"></video></div>

        <span class="fight__timer">01:03</span>
        <!-- FIRST PLAYER -->
        <div class="fight__first-player">
            <h1 class="player__name">GAMORA</h1>
            <div class="first-player__container">
                <div class="first-player--color"></div>
                <div class="first-player__number">1</div>
                <img src="Images/gamora.png" width="100%" alt="">
            </div>
            <span class="bet--first-player"><a href="#">Bet</a></span>
            <p class="player__desc">Occupation: assassin<br />Race: Zen-Whoberian</p>
        </div>
        <div class="fight__first-player--02">
            <h2 class="player__name--02">GAMORA</h2>
            <div class="first-player__container--02">
                <div class="first-player--color--02"></div>
                <div class="first-player__number--02">2</div>
                <img src="Images/gamora.png" width="100%" alt="">
            </div>
        </div>
        <div class="fight__first-player__lifebar">
            <div class="first-player__lifebar__content"></div>
        </div>
        <!-- SECOND PLAYER -->
        <div class="fight__second-player">
            <h1 class="player__name">BATMAN</h1>
            <div class="second-player__container">
                <div class="second-player--color"></div>
                <div class="second-player__number">1</div>
                <img src="Images/batman.png" width="100%" alt="">
            </div>
            <span class="bet--second-player"><a href="#">Bet</a></span>
            <p class="player__desc">Occupation: businessman<br />Race: human</p>
        </div>
        <div class="fight__second-player--02">
            <h2 class="player__name--02">BATMAN</h2>
            <div class="second-player__container--02">
                <div class="second-player--color--02"></div>
                <div class="second-player__number--02">2</div>
                <img src="Images/batman.png" width="100%" alt="">
            </div>
        </div>
        <div class="fight__second-player__lifebar">
            <div class="second-player__lifebar__content"></div>
        </div>
    </section>

    <section id="game-interface">
        <div class="game-interface__title-block"><h1 class="game-interface__title">Chances of victory</h1></div>
        <div class="game-interface__all-percentage">
            <div class="percentage--first-player"><span class="first-player--cote">02,20</span></div>
            <div class="percentage--second-player"><span class="second-player--cote">01,23</span></div>
        </div>
        <form action="" method="">
            <table class="bet-interface">
                <tr>
                    <td class="bet-interface__amount"><input type="text" value="Amount" disabled="disabled" placeholder="Amount to bet"></td>
                    <td class="bet-interface__odd"><p>Odd</p></td>
                </tr>
                <tr>
                    <td class="bet-interface__potential"><input type="text" value="Potential" disabled="disabled" placeholder="Amount to bet"></td>
                    <td class="bet-interface__confirm"><input type="submit" value="Confirm"></td>
                </tr>
            </table>
        </form>
    </section>


    <!-- CHATBOX -->
    <section id="chatbox">
        <div class="chatbox__title-block"><h1 class="chatbox__title">Chatbox</h1></div>
            <table class="chatbox__form">
                <tr>
                    <td ><input class="chatbox__message" placeholder="Type a message..." type="textarea"></td>
                    <td class="chatbox__submit"><input type="submit" value="Submit"></td>
                </tr>
            </table>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>