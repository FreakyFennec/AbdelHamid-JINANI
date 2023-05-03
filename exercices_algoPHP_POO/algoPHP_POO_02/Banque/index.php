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
                <h3>POO exo banque</h3>
                <?php
                spl_autoload_register(function ($class_name) { // Pour faire des includes.
                    include $class_name . '.php';
                });

                $martin = new Titulaire("MARTIN", "Henry", "M", "1981-08-24", "Cadix");
                $compteCourant = new Compte("Compte courant", 1527.85, "€", $martin);
                $compteEpargne = new Compte("Compte épargne", 5000, "€", $martin);
                
                echo $martin->afficherComptes();

                $compteCourant->crediter(200); // Appel de la methode crediter avec un paramètre de 200.
                echo $martin->afficherComptes();

                $compteCourant->debiter(300);
                echo $martin->afficherComptes();
                
                $compteEpargne->virement(1000, $compteCourant); // Compte à débiter->methode virement(montant à virer, compte à créditer).
                echo $martin->afficherComptes();            
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>