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
                <div class="first-player__frame"></div>
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
        <div class="chatbox__title-block"><h2 class="chatbox__title">Chatbox</h2></div>
        <script src="scripts/node_modules/socket.io-client/dist/socket.io.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
            <script>
                const socket = io('https://majestic-apparel.glitch.me/');
		// On demande le pseudo, on l'envoie au serveur et on l'affiche dans le titre
		var pseudo = prompt('pseudo ?');
		socket.emit('nouveau_client', pseudo);
		document.title = pseudo + ' - ' + document.title;

		// Quand on reçoit un message, on l'insère dans la page
		socket.on('message', function (data) {
			insereMessage(data.pseudo, data.message)
		})

		// Quand un nouveau client se connecte, on affiche l'information
		socket.on('nouveau_client', function (pseudo) {
			$('#zone_chat').prepend('<p><em>' + pseudo + '</em></p>');
		})

		// Lorsqu'on envoie le formulaire, on transmet le message et on l'affiche sur la page
		$('#formulaire_chat').submit(function (e) {
			e.preventDefault();
      console.log('ola');
			var message = $('#message').val();
			socket.emit('message', message); // Transmet le message aux autres
			insereMessage(pseudo, message); // Affiche le message aussi sur notre page
			$('#message').val('').focus(); // Vide la zone de Chat et remet le focus dessus
			return false; // Permet de bloquer l'envoi "classique" du formulaire
		});

		// Ajoute un message dans la page
		function insereMessage(pseudo, message) {
			$('#zone_chat').prepend('<p><strong>' + pseudo + '</strong> ' + message + '</p>');
		}
	</script>
            <table class="chatbox__form">
                <tr>
                    <td ><input class="chatbox__message" placeholder="Type a message..." type="textarea"></td>
                    <td class="chatbox__submit"><input type="submit" value="Submit"></td>
                </tr>
            </table>
    </section>

    <script src="scripts/fightpage.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>