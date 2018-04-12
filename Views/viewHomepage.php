<?php $title = 'HFB | Home'; 

try
{
    // Try to connect to database
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASS);

    // Set fetch mode to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e)
{
    // Failed to connect
    die('Could not connect');
}

$query = $pdo->query('SELECT * FROM users ORDER BY wallet desc LIMIT 5');
$users = $query->fetchAll();

?>

<!--Temporarily buffered (create the function content next)-->

<?php ob_start(); ?>

    <section id="live-battles">
        <div class="live-battles__title-block"><h2 class="live-battles__title">Live battles</h2></div>

        <div class="live-battles__container">
            <div class="live-battles__blocks">

                <!-- 1 VS 1 -->
                <a href="./?action=fightpage"><div class="live-battles__block"  data-block="01">
                    <!-- IMAGES -->
                    <div class="picture__effect"><div class="js-effect"></div></div>
                    <div class="picture--top"><img src="images/gamora.png" style="height:100%;" style="width:100%;" alt="First player"></div>
                    <div class="picture--bottom"><img src="images/batman.png" style="height:100%;" alt="Second player"></div>
                    <div class="live-battles__diagonal"></div>
                    <!-- TEXTS -->
                    <div class="text-container">
                        <div class="text-container__timer"><p>00:39</p></div>
                        <div class="live-battles__name-rating--top">
                            <h3 class="name-rating__name--top">GAMORA</h3>
                            <div class="name-rating__rating--top"><h4>2,20</h4></div>
                        </div>
                        <div class="live-battles__name-rating--bottom">                            
                            <div class="name-rating__rating--bottom"><h4>1,23</h4></div>
                            <h3 class="name-rating__name--bottom">BATMAN</h3>
                        </div>
                    </div>
                </div></a>
                <a href="./?action=fightpage"><div class="live-battles__block"  data-block="02">
                    <!-- IMAGES -->
                    <div class="picture__effect"><div class="js-effect"></div></div>
                    <div class="picture--top"><img src="images/gamora.png" style="height:100%;" style="width:100%;" alt="First player"></div>
                    <div class="picture--bottom"><img src="images/batman.png" style="height:100%;" alt="Second player"></div>
                    <div class="live-battles__diagonal"></div>
                    <!-- TEXTS -->
                    <div class="text-container">
                        <div class="text-container__timer"><p>00:39</p></div>
                        <div class="live-battles__name-rating--top">
                            <h3 class="name-rating__name--top">GAMORA</h3>
                            <div class="name-rating__rating--top"><h4>2,20</h4></div>
                        </div>
                        <div class="live-battles__name-rating--bottom">                            
                            <div class="name-rating__rating--bottom"><h4>1,23</h4></div>
                            <h3 class="name-rating__name--bottom">BATMAN</h3>
                        </div>
                    </div>
                </div></a>
                <a href="./?action=fightpage"><div class="live-battles__block" data-block="03">
                    <!-- IMAGES -->
                    <div class="picture__effect"><div class="js-effect"></div></div>
                    <div class="picture--top"><img src="images/gamora.png" style="height:100%;" alt="First player"></div>
                    <div class="picture--bottom"><img src="images/batman.png" style="height:100%;" alt="Second player"></div>
                    <div class="live-battles__diagonal"></div>
                    <!-- TEXTS -->
                    <div class="text-container">
                        <div class="text-container__timer"><p>00:39</p></div>
                        <div class="live-battles__name-rating--top">
                            <h3 class="name-rating__name--top">GAMORA</h3>
                            <div class="name-rating__rating--top"><h4>2,20</h4></div>
                        </div>
                        <div class="live-battles__name-rating--bottom">                            
                            <div class="name-rating__rating--bottom"><h4>1,23</h4></div>
                            <h3 class="name-rating__name--bottom">BATMAN</h3>
                        </div>
                    </div>
                </div></a>

                <!-- 2 VS 2 -->
                <a href="./?action=fightpage2vs2"><div class="live-battles__block"  data-block="04">
                    <!-- IMAGES -->
                    <div class="picture__effect--duo"><div class="js-effect"></div></div>
                    <div class="pictures--top">
                        <img src="images/gamora.png" class="pictures--top__first" style="width: 100%;" alt="First player of the first team">
                        <img src="images/batman.png" class="pictures--top__second" style="width: 100%;" alt="Second player of the first team">
                    </div>
                    <div class="pictures--bottom">
                        <img src="images/gamora.png" class="pictures--bottom__first" style="width: 100%;" alt="First player of the second team">
                        <img src="images/batman.png" class="pictures--bottom__second" style="width: 100%;" alt="Second player of the second team">
                    </div>
                    <div class="live-battles__diagonal--duo"></div>
                    <!-- TEXTS -->
                    <div class="text-container">
                        <div class="text-container__timer"><p>00:39</p></div>
                        <div class="live-battles__names-rating--top--duo">
                            <h3 class="name-rating__names--top--duo01">GAMORA / BATMAN</h3>
                            <h4 class="name-rating__rating--top--duo">1,55</h4>
                        </div>
                        <div class="live-battles__names-rating--bottom--duo">
                            <h3 class="name-rating__names--bottom--duo01">GAMORA / BATMAN</h3>
                            <h4 class="name-rating__rating--bottom--duo">1,55</h4>
                        </div>
                    </div>
                </div></a>
                <a href="./?action=fightpage2vs2"><div class="live-battles__block"  data-block="05">
                    <!-- IMAGES -->
                    <div class="picture__effect--duo"><div class="js-effect"></div></div>
                    <div class="pictures--top">
                        <img src="images/gamora.png" class="pictures--top__first" style="width: 100%;" alt="">
                        <img src="images/batman.png" class="pictures--top__second" style="width: 100%;" alt="">
                    </div>
                    <div class="pictures--bottom">
                        <img src="images/gamora.png" class="pictures--bottom__first" style="width: 100%;" alt="">
                        <img src="images/batman.png" class="pictures--bottom__second" style="width: 100%;" alt="">
                    </div>
                    <div class="live-battles__diagonal--duo"></div>
                    <!-- TEXTS -->
                    <div class="text-container">
                        <div class="text-container__timer"><p>00:39</p></div>
                        <div class="live-battles__names-rating--top--duo">
                            <h3 class="name-rating__names--top--duo01">GAMORA / BATMAN</h3>
                            <h4 class="name-rating__rating--top--duo">1,55</h4>
                        </div>
                        <div class="live-battles__names-rating--bottom--duo">
                            <h3 class="name-rating__names--bottom--duo01">GAMORA / BATMAN</h3>
                            <h4 class="name-rating__rating--bottom--duo">1,55</h4>
                        </div>
                    </div>
                </div></a>
            </div>
        </div>
    </section>


    <section id="myprofile">
        <div class="myprofile__title-block"><h2 class="myprofile__title">My profile</h2></div>
        <div class="myprofile__container">

            <!-- PROFILE PART -->
            <div class="profile__block">
                <?php if(isset($_SESSION['pseudo'])):?>
                        <div class="profile__picture"><img src="https://ui-avatars.com/api/?name=<?=$_SESSION['pseudo']?>&background=4d669f&color=fff&rounded=true&size=75&length=1" alt="your avatar"></div>
                        <div class="profile__coins"><?=$_SESSION['wallet']?> coins</div>
                        <div class="profile__name"><?=$_SESSION['pseudo']?></div>
                        <div class="profile_all-bets">
                            <span class="bets">
                                <span class="bets__total"><?=$_SESSION['numberbets']?></span><br />
                                <span class="bets__desc">Bets</span>
                            </span>
                            <span class="won-bets">
                                <span class="won-bets__total"><?=$_SESSION['numberbetswon']?></span><br />
                                <span class="won-bets__desc">Won</span>
                            </span>
                        </div>
                        <div class="rank">
                                <span class="rank__desc">Rank</span><br />
                                <span class="rank__actual">300</span>
                        </div>
                <?php endif;?>
                <?php if(!isset($_SESSION['pseudo'])):?>
                        <a href="./?action=signin"><div class="sign-in__redirect">Sign in</div></a>
                <?php endif;?>
                    </div>

            <!-- LEADERBOARD PART -->
            <div class="leaderboard-block">
                <div class="leaderboard__title">Leaderboard</div>
                <div class="leaderboard__won-bets">Coins</div>
                
                <table class="leaderboard__table">
                    <?php $i=1; foreach($users as $_user):?>
                    <tr>
                        <td class="leaderboard__table__number"><?= $i ?></td>
                        <td class="leaderboard__table__picture"><div class="table__picture"><img src="https://ui-avatars.com/api/?name=<?=$_user->pseudo?>&background=4d669f&color=fff&rounded=true&size=35&length=1" alt="player avatar"></div></td>
                        <td class="leaderboard__table__name"><?= $_user->pseudo ?></td>
                        <td class="leaderboard__table__won-bets"><?= $_user->wallet ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>

        </div>
    </section>

    <section id="explanations">
        <div class="explanations__title-block"><h2 class="explanations__title">Explanations</h2></div>
        <div class="explanations__image"><img src="images/explanations.png" style="width: 100%;" alt=""></div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>