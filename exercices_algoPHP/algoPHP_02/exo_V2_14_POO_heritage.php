<!--
   exo_V2_14_POO_heritage.php
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
                <h3>exo_V2_14_POO_heritage.php</h3>

                <?php    
                class Voiture {
                    protected $_brand;
                    protected $_model;

                    public function __construct($brand, $model) {
                        $this->_brand = $brand;
                        $this->_model = $model;
                    }

                    
                    public function getBrand() {
                        return $this->_brand;
                    }

                    public function getModel() {
                        return $this->_model;
                    }

                    public function setBrand($brand) {
                    $this->_brand = $brand;
                    }
                    public function setModel($model) {
                        $this->_model = $model;
                    }


                    public function getInfos() {
                        echo "Nom et modèle du véhicule : $this->_brand $this->_model<br><br>";
                    }
                }
                
                class Electrique extends Voiture {
                    private $_autonomy;

                    public function __construct($brand, $model, $autonomy) {

                        parent::__construct($brand, $model);

                        $this->_autonomy = $autonomy;
                    }

                    public function getAutonomy() {
                        return $this->_autonomy;
                    }

                    public function setAutonomy($autonomy) {
                    $this->_autonomy = $autonomy;
                    } 

                    public function getInfos() {
                        echo "Nom et modèle du véhicule : $this->_brand $this->_model, $this->_autonomy <br><br>";
                    }
                }

                $V1 = new Voiture("Peugeot", "408");
                
                $V2 = new Electrique("BMW", "i3", "100");                

                $V1->getInfos();
                $V2->getInfos();
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>