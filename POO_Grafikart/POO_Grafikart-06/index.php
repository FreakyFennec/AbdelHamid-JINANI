<?php

require 'form.php';

$form = new Form(array(
    'userName' => 'Paquita'
));

// var_dump($form);die();  // Même si les variables sont private le var_dump() les affiches.

echo $form->input('userName');
echo $form->input('passWord');
echo $form->submit();


$form = new Form();
echo $form->input('test');
echo $form->input('test');
echo $form->input('test');
echo $form->submit();
