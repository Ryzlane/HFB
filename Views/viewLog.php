<?php $title = 'HFB | Log in'; ?>


<!-- Temporarily buffered (create the function content next) -->
<?php ob_start(); ?>

    <h1>I am the content of the log in page!</h1>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>