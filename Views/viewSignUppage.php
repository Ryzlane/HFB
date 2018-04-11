<?php $title = 'HFB | Sign up'; ?>


<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id=sign-in>
        <div class="sign__box">
            <div class="sign__title-block"><div class="sign__title">Sign up</div></div>
            <form action="" method="">
                <table class="sign__form">
                    <tr>
                        <td class="sign__email"><input type="text" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td class="sign__or"><p>Or</p></td>
                    </tr>
                    <tr class="sign__username">
                        <td><input type="text" name="username" placeholder="Username"></td>
                    </tr>
                    <tr class="sign__password">
                        <td><input type="password" name="paswword" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td class="sign__confirm"><input type="submit" value="Sign up"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>