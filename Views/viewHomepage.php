<?php $title = 'HFB | Home'; ?>


// Temporarily buffered (create the function content next)
<?php ob_start(); ?>

    HTML CONTENT   

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>