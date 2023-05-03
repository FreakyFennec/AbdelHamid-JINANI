<?php

require 'form.php';

$form = new Form($_POST);       // Formulaire avec paramètre postés.

?>

<form action="#" method="post">

    <?php
    echo $form->input('userName');
    echo $form->input('passWord');
    echo $form->submit();
    ?>
    
</form>

