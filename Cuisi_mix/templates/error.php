<?php $title = 'Homepage'; ?>
<?php $title_site = 'La cuisine mixte'; ?>
<?php $title_page = 'Ooups !'; ?>

<?php ob_start(); ?>

<p>Une erreur est survenue : <?= $errorMessage; ?></p>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>