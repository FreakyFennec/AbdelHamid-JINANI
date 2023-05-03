<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="public/img/favicons/favicon-96x96.png">

    <title>Dev glossary PHP</title>

    <!-- Style -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-responsive.css">
    <link rel="stylesheet" href="public/css/style-table.css">
    <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
</head>
<body>
    <div id="container">
        <?php include_once('../includes/header.php') ?>
        <main>
            <article>
                <h1 id="title_article">Glossaire du développeur</h1>
                <!--<p id="presentation">Petite définition.<br>
                    Une abréviation est un groupe de lettres qui représente un mot ou un groupe de mots.<br>
                    Quand on peut lire l'abréviation comme un mot (ex.: Unicef) on parle d'un acronyme et si l'on ne peut que l'épeler (ex.: EDF) alors c'est un sigle.
                </p>-->
                <?php
                    include '../model/config.php';

                    // Connect to mysqli
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Verify connexion
                    if (mysqli_connect_errno()) {
                        echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
                        exit();
                    }

                    // Query
                    $req = "
                        SELECT * 
                        FROM dev_glossary
                        WHERE category = 'PHP'
                    ";
                    $result = $conn->query($req);
                    $num = mysqli_num_rows($result);                
                    
                    if ($num > 0) {

                        echo "<table>
                            <caption>Pour le PHP</caption>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Signification</th>
                                    <th>Définition</th>
                                    <th>Type</th>
                                    <th>Catégorie</th>
                                </tr>
                                <thead>
                                <tbody> 
                                <tr>";

                                while($row = mysqli_fetch_assoc($result)) {
                                    $name = $row['name'];
                                    $signification = $row['signification'];
                                    $definition = $row['definition'];
                                    $type = $row['type'];
                                    $category = $row['category'];
                                
                                    echo "
                                        <td class=\"name\">" . $name. "</td>
                                        <td class=\"signification\">" . $signification. "</td>
                                        <td class=\"definition\">" . $definition. "</td>
                                        <td class=\"type\">" . $type. "</td>
                                        <td class=\"category\">" . $category. "</td>
                                        </tr>
                                    ";
                                }
                        echo "</table>";
                    } else {
                        echo "0 no results";
                    }  
                     // Free the memory space allocated for this query of the db
                    mysqli_free_result($result);
                    // Close db
                    mysqli_close($conn);
                ?>

                <?php include_once('../includes/dropdown_menu.php') ?>
            </article>
        </main>
        <aside>  
            <figure id="author">
                <img src="public/img/ralmanClasse.png" alt="Freaky Fennec" id="img_author">
            </figure>
            <div id="zone_presentation">
                <figcaption>Freaky Fennec</figcaption>
                <p class="profession">Sand fox</p>
                <p id="presentation_author">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatem optio voluptatum reiciendis ea veritatis corrupti ducimus quae, maxime magnam!</p>
            </div> 
        </aside>        
        <footer><small>Shapped by "The Stinky Feet Workshop's" © 2022</small></footer>
    </div>
</body>
</html>