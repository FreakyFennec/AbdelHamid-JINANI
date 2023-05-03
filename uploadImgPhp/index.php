<?php
    require './bdd.php';

    if(isset($_FILES['file'])){
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];
        $maxSize = 400000;

        /**
         * Pour vérifier le alt de l'image
         
        * if (isset($_POST['Enregistrer'])) {
        *     echo $_POST['altImg'];
        * }
        */

        if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $file = $uniqueName.".".$extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            $altImg = $_POST['altImg'];

            move_uploaded_file($tmpName, './upload/'.$file);

            $req = $db->prepare('INSERT INTO file (name, altImg) VALUES (?, ?)');
            $req->execute([$file, $altImg]);

            // echo "Image enregistrée";
        }
        else{
            echo "Une erreur est survenue";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h2>Ajouter une image</h2>

    <form action="index.php" method="POST" enctype="multipart/form-data">
    
        <label for="file">Fichier : </label>
        <input type="file" name="file"><br>
    
        <label for="altImg">Alt : </label>
        <input type="text" name="altImg"><br>

        <input type="submit" name="Enregistrer">
    </form>
    
    <h2>Mes images</h2>

    <?php 
        $req = $db->query('SELECT id, name, altImg FROM file ORDER BY id DESC LIMIT 1');
        while($data = $req->fetch()){
            echo "<img src='./upload/".$data['name']."' alt=".$data['altImg']." width='260px'><br>";
        }
    ?>
</body>
</html>