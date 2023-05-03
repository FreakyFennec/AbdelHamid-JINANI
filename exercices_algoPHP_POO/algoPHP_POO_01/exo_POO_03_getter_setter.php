<!--
    exo_POO_03_getter_setter.php
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
                <h3>exo_POO_03_getter_setter.php</h3>

                <?php    
                class Computer {        // Création de la classe Computer
                    private $_brand;    // Création des attributs en mode private

                    public function __construct($brand) {   // Création du constructeur __construct()
                        $this->_brand = $brand;        // $this permet de faire référence à l'instance de l'objet dans une méthode
                    }

                    public function getBrand() {
                        return $this->_brand;
                    }
                }
                $workPlace = new Computer("Samsung");
                echo $workPlace->getBrand()."<br>";            // Affiche 'Samsung'
                var_dump($workPlace);   
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
    