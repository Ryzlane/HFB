<?php $title = 'HFB | Fight'; ?>


<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id="fight">
        <div class="bg-video"><video playsinline autoplay muted loop><source src="images/background.mp4" type="video/mp4"></video></div>
        
        <span class="fight__timer">01:03</span>
        <!-- FIRST PLAYER -->
        <div class="fight__first-player">
            <h3 class="player__name">GAMORA</h3>
            <div class="first-player__container">
                <div class="first-player__frame js-frame"></div>
                <div class="first-player--color"></div>
                <img src="images/gamora.png" style="width:100%;" alt="First fighter">
            </div>
            <span class="bet--first-player"><a href="#">Bet</a></span>
            <p class="player__desc">Occupation: assassin<br />Race: Zen-Whoberian</p>
        </div>
        <div class="fight__first-player__lifebar">
            <div class="first-player__lifebar__content"></div>
        </div>
        <!-- SECOND PLAYER -->
        <div class="fight__second-player">
            <h3 class="player__name">BATMAN</h3>
            <div class="second-player__container">
                <div class="second-player__frame js-frame"></div>
                <div class="second-player--color"></div>
                <img src="images/batman.png" style="width:100%;" alt="Second fighter">
            </div>
            <span class="bet--second-player"><a href="#">Bet</a></span>
            <p class="player__desc">Occupation: businessman<br />Race: human</p>
        </div>
        <div class="fight__second-player__lifebar">
            <div class="second-player__lifebar__content"></div>
        </div>
    </section>

    <section id="game-interface">
        <div class="game-interface__title-block"><h2 class="game-interface__title">Chances of victory</h2></div>
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
            <div class="chatbox__message --other">
                <div class="message--other__pseudo">Burno</div>
                <div class="message--other__date">1pm</div>
                <div class="message__content"><p>All my coins on Jar Jar Binks!</p></div>
            </div>
            <div class="chatbox__message --other">
                <div class="message--other__pseudo">Etienne</div>
                <div class="message--other__date">1.02pm</div>
                <div class="message__content"><p>Hello world!</p></div>
            </div>
            <div class="chatbox__message --you">
                <div class="message--you__pseudo">Me</div>
                <div class="message--you__date">1.05pm</div>
                <div class="message__content"><p>Take my money!</p></div>
            </div>
            <table class="chatbox__form">
                <tr>
                    <td ><input class="form__message" placeholder="Type a message..." type="textarea"></td>
                    <td class="form__submit"><input type="submit" value="Submit"></td>
                </tr>
            </table>
    </section>

    <script src="scripts/fightpage.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>