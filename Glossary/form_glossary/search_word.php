<form id="search_word" action="" method="post">
    <label for="word">Your word : </label>
    <input type="text" name="word" id="word">
    <input type="submit" value="Search">

    <?php
        include '../model/config.php';

        // Connect to mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Verify connexion
        if (mysqli_connect_errno()) {
            echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
            exit();
        }

        if (isset($_POST['word']) && !empty($_POST['word'])) {
            $word = mysqli_real_escape_string($conn, $_POST['word']);
        
        // Query
        $req = "
            SELECT * 
            FROM dev_glossary
            WHERE name LIKE '$word'
        ";

        // Execute the query
        $result = $conn->query($req);

        // Verify the result
        $num = mysqli_num_rows($result);                
        
        if ($num > 0) {
            echo ('<p class="search_respons">' . $word . ' est dans la table</p>');
        } else {
            echo ('<p class="search_respons">Le mot n\'est pas dans la table</p>');
        }

        // Free the memory space allocated for this query to mysqli
        mysqli_free_result($result);
        // Close connexion to mysqli
        mysqli_close($conn);
    }?>
</form>