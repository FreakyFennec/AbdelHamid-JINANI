<?php
    require 'form.php';
    require 'text.php';

    $form = new Form($_POST);

    echo '<pre>';
        var_dump(Text::publicwithZero(4));          // Appel de la méthode Static.
    echo '</pre>';

?>

<form action="#" method="post">
    <?php
        echo $form->input('userName');
        echo $form->input('passWord');
        echo $form->submit();
    ?>   
</form>