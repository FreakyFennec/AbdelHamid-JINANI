<!--
    exo6_V1_06_billCalculation.php
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
            <h2>Exo PHP 01</h2>
            <section>
                <h1>Exercice 6</h1>

                <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles,<br> 
                    son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

                <h3>exo6_V1_06_billCalculation.php</h3>

                <?php
                // variables de travail
                $pUnit = 9.99;
                $quant = 5;
                $tauxTva = 0.2;

                // calcul de la facture
                $pHorsTaxes = $pUnit * $quant;
                $montantTva = $pHorsTaxes * .2;
                $pTttc = $pHorsTaxes + $montantTva;

                echo "Prix unitaire de l’article: $pUnit €<br>
                    Quantité: $quant<br>
                    Taux de TVA: $tauxTva<br>
                    Le montant de la facture à régler est de : $pTttc € <br>";
                ?>                        
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
