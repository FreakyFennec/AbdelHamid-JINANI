<!--
    exo_POO_01_construct_class.php
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
                <h3>exo_POO_01_construct_class.php</h3>

                <p>Cf. le fichier dans un éditeur de texte.</p>
                <pre>
                    <?php    
                    class Computer {        // Création de la classe Computer
                        private $_brand;    // Création des attributs en mode private
                        private $_model;
                        private $_screen;
                        private $_statusOnOff = 0;

                        public function turnOn() {      // Création de la méthode turnOn()
                            $this->_statusOnOff = 1;    // $this permet de faire référence à    l'instance de l'objet dans une méthode */
                        }
                    }
                    $workPlace = new Computer();    // La variable $workPlace instancie un objet    de class Computer
                    $workPlace->turnOn();           // La flèche (->) donne l'ordre d'utiliser la   méthode turnO()
                    ?>
                </pre>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>