<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta author="" content="">
    <title>index (BootstrapForm)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
    <div class="container">
        <?php

            // autoloader avec fonction nommée
            // function my_autoloader($class_name) {

            //     require 'classes/' . $class_name . '.php';
            // }
            // spl_autoload_register('my_autoloader');

            // autoload utilisant une fonction anonyme
            //spl_autoload_register(function($class_name) {

            // include 'classes/' . $class_name . '.php';
            //});

            // Toute la partie autoloader est placée dans une classe Autoloader
            // puis elle est appelée
            require 'classes/Autoloader.php';

            Autoloader::register();

            $form = new BootstrapForm($_POST);

        ?>

        <form action="#" method="post">
            <?php
                echo $form->input('userName');
                echo $form->input('passWord');
                echo $form->submit();
            ?>   
        </form>
    </div>
</body>
</html>    

