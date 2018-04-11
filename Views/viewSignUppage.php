<?php $title = 'HFB | Sign up'; 


$errorMessagesCreate = [];
$successMessagesCreate = [];
$createstate = [];

require './Controls/createAccount.php';

?>


<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <section id=sign-in>
        <div class="sign__box">
            <div class="sign__title-block"><div class="sign__title">Sign up</div></div>
            <form action="#" method="post">
                <table class="sign__form">
                    <tr>
                        <td class="sign__email"><input type="text" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td class="sign__or"><p>And</p></td>
                    </tr>
                    <tr class="sign__username">
                        <td><input type="text" name="pseudo" placeholder="Username"></td>
                    </tr>
                    <tr class="sign__password">
                        <td><input type="password" name="password" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td class="sign__confirm"><input type="submit" name="create" value="Sign up"></td>
                    </tr>
                </table>
                <?php foreach($errorMessagesCreate as $message): ?>
                <p class="sign__errors"><?= $message ?></p>
                <?php endforeach ?>
                <?php foreach($successMessagesCreate as $message): ?>
                <p class="sign__success"><?= $message ?></p>
                <?php endforeach ?>
            </form>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>