<?php $title = 'HFB | Sign in'; 

$errorMessagesLogin = [];
$successMessagesLogin = [];
$logstate = [];

require './controls/connectAccount.php';

?>

<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id=sign-in>
        <div class="sign__box">
            <div class="sign__title-block"><div class="sign__title">Sign in</div></div>
            <form action="#" method="post">
                <table class="sign__form">
                    <tr>
                        <td class="sign__email"><input type="text" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td class="sign__or"><p>Or</p></td>
                    </tr>
                    <tr class="sign__username">
                        <td><input type="text" name="pseudo" placeholder="Username"></td>
                    </tr>
                    <tr class="sign__password">
                        <td><input type="password" name="password" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td class="sign__password--forget"><a href="./?action=forgottenpassword">Forget your password?</a></td>
                    </tr>
                    <tr>
                        <td class="sign__confirm"><input type="submit" name="submit" value="Sign in"></td>
                    </tr>
                </table>
                <?php foreach($errorMessagesLogin as $message): ?>
                <p class="sign__errors"><?= $message ?></p>
                <?php endforeach ?>
                <?php foreach($successMessagesLogin as $message): ?>
                <p class="sign__success"><?= $message ?></p>
                <?php endforeach ?>
            </form>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>