<?php
    // Verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinema_hamid_02";

        // Données pour la table personne.
        // $nom_personne = $_POST['nom_personne'];
        // $prenom_personne = $_POST['prenom_personne'];
        // $date_naiss_personne = $_POST['date_naiss_personne'];
        // $lieu_naiss_personne = $_POST['lieu_naiss_personne'];
        // $genre_personne = $_POST['genre_personne'];

        // Données pour la table film.
        $titre_film = $_POST['titre_film'];
        $date_sortie_fr = $_POST['date_sortie_fr'];
        $duree_film = $_POST['duree_film'];
        $synopsis_film = $_POST['synopsis_film'];
        $affiche_film = $_POST['affiche_film'];
        $alt_affiche = $_POST['alt_affiche'];
        $note_film = $_POST['note_film'];
        $type_genre_film = $_POST['type_genre_film'];
        $realisateur_id = $_POST['realisateur_id'];

        // Connect to mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Verify connexion
        if (mysqli_connect_errno()) {
            echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
            exit();
        }

        // Prepare query personne
        // $statement = $conn->prepare("INSERT INTO  personne(nom_personne, prenom_personne, date_naiss_personne, lieu_naiss_personne, genre_personne) 
                                    // VALUES (?, ?, ?, ?, ?)");

        // Bind values and execute insert
        // $statement->bind_param("sssss",$nom_personne, $prenom_personne, $date_naiss_personne, $lieu_naiss_personne, $genre_personne);


        // Prepare query film
        $statement = $conn->prepare("INSERT INTO film(titre_film, date_sortie_fr, duree_film, synopsis_film, affiche_film, alt_affiche, note_film, type_genre_film, realisateur_id)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $statement->bind_param("sssssssss", $titre_film, $date_sortie_fr, $duree_film, $synopsis_film, $affiche_film, $alt_affiche, $note_film, $type_genre_film, $realisateur_id);

        if ($statement->execute()) {
            print "C'est okay !";
            header('Location: cinema_form_post.php');
            exit;
        } else {
            print $msqli->error;
        }
    }
?>