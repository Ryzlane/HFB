<?php $title = 'HFB | Home'; ?>

<!--Temporarily buffered (create the function content next)-->

<?php ob_start(); ?>

    <section id="live-battles">
        <div class="live-battles__title-bloc"><h1 class="live-battles__title">Live battle</h1></div>

        <div class="live-battles__container">
            <div class="live-battles__blocs">
                <div class="live-battles__bloc"  data-bloc="01">
                    <div class="picture__effect"></div>
                    <div class="picture--top"><img src="Images/gamora.png" height="100%" alt=""></div>
                    <div class="picture--bottom"><img src="Images/batman.png" height="100%" alt=""></div>
                    <div class="live-battles__diagonal"></div>
                </div>
                <div class="live-battles__bloc"  data-bloc="02">
                    <div class="picture__effect"></div>
                    <div class="picture--top"><img src="Images/gamora.png" height="100%" alt=""></div>
                    <div class="picture--bottom"><img src="Images/batman.png" height="100%" alt=""></div>
                    <div class="live-battles__diagonal"></div>
                </div>
                <div class="live-battles__bloc" data-bloc="03">
                    <div class="picture__effect"></div>
                    <div class="picture--top"><img src="Images/gamora.png" height="100%" alt=""></div>
                    <div class="picture--bottom"><img src="Images/batman.png" height="100%" alt=""></div>
                    <div class="live-battles__diagonal"></div>
                </div>
                <div class="live-battles__bloc"  data-bloc="04">

                </div>
                <div class="live-battles__bloc"  data-bloc="05">

                </div>
            </div>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>