<!--
    exo_V2_15_POO_mail_verification.php
    =============================================
    By AHJ
-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formation Développeur Web et Web Mobile</h1>
        </header>
        <main>
            <h2>Exo PHP 02</h2>
            <section>
                <h3>exo_V2_15_POO_mail_verification.php</h3>

                <p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format</p>

                <?php    
                $email = "elan@elan-formation.fr";

                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "L'adresse $email est une adresse e-mail valide";
                } else {
                    echo "L'adresse $email est une adresse e-mail invalide";
                }
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>