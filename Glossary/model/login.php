<?php
include 'config.php';
// Connect to mysqli
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verify connexion
if (mysqli_connect_errno()) {
    echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
    exit();
}

// Retrive data from the form
$email = $_POST["email"];
$password = $_POST["password"];

// Verify if user exist
$query = "
    SELECT *
    FROM user
    WHERE email = '$email' AND password = '$password'
";
$result = $conn->query($query);

// If user exist
if ($result->num_rows == 1) {
    header("Location: ../form_glossary/glossary_form_post.php");
    exit();
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect";
}

// Close connexion to database
$conn->close();
?>
