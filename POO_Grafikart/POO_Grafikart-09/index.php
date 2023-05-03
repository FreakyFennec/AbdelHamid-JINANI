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

</head>
<body>
    
<?php
    require 'Form.php';
    require 'BootstrapForm.php';


    $form = new BootstrapForm($_POST);

?>

<form action="#" method="post">
    <?php
        echo $form->input('userName');
        echo $form->input('passWord');
        echo $form->submit();
    ?>   
</form>
    

</body>
</html>
