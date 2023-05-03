<!--
    exo08_V2_display_N_images.php
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
            <h3>exo08_V2_display_N_images.php</h3>

            <?php    
            // variables de travail
            $url = "http://my.mobirise.com/data/userpic/764.jpg";
            $length = 4;

            function repeatImage($url, $length) {

                for ($i=0; $i < $length; $i++) { 
                    echo "<img src=\"$url\" alt=\"L'affreux chien.\" width=\"200px\">";
                }

            }
            repeatImage($url, 4);
            ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
    