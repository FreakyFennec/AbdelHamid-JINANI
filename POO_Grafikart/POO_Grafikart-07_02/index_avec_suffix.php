<?php
    require 'form.php';

    require 'Personnage.php';

    require 'text_avec_suffix.php';

    $merlin = new Personnage('Merlin');
    $merlin->regenerer();
    
?>

<pre>
    <?php var_dump(var_dump($merlin)); ?><br>
</pre>

<?php

    $form = new Form($_POST);

    var_dump(Text::withZero(4));         // Appel de la méthode Static

?>

<form action="#" method="post">
    <?php
        echo $form->input('userName');
        echo $form->input('passWord');
        echo $form->submit();
    ?>   
</form>