<?php
    // Verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dev_tools";

        $name = $_POST['name'];
        $signification = $_POST['signification'];
        $definition = $_POST['definition'];
        $type = $_POST['type'];
        $category = $_POST['category'];

        // Connect to mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Verify connexion
        if (mysqli_connect_errno()) {
            echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
            exit();
        }

        // Prepare query
        $statement = $conn->prepare("
            INSERT INTO  dev_glossary(name, signification, definition, type, category) 
            VALUES (?, ?, ?, ?, ?)
        ");

        // Bind values and execute insert
        $statement->bind_param("sssss",$name, $signification, $definition, $type, $category);

        if ($statement->execute()) {
            header('Location: glossary_form_post.php');
            exit; // Pour arrêter le script.                
        } else {
            print $conn->error;
        }
    }
?>