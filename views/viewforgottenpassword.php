<?php $title = 'HFB | Forgotten password'; 

$errorMessagesForgotten = [];
$successMessagesForgotten = [];
$sendState = '0';

require './controls/forgottenpassword.php';

?>

<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id=sign-in>
        <div class="sign__box">
            <div class="sign__title-block --forgotten"><div class="sign__title">Forgotten password</div></div>
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
                    <tr>
                        <td class="sign__confirm"><input type="submit" name="send" value="Send a new"></td>
                    </tr>
                </table>
                <?php foreach($errorMessagesForgotten as $message): ?>
                <p class="sign__errors"><?= $message ?></p>
                <?php endforeach ?>
                <?php foreach($successMessagesForgotten as $message): ?>
                <p class="sign__success"><?= $message ?></p>
                <?php endforeach ?>
            </form>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>