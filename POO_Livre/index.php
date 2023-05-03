<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formation Développeur Web et Web Mobile</h1>
        </header>
        <main>
            <h2>POO Livre</h2>
            <section>

                <?php
                spl_autoload_register(function ($class_name) {
                    include $class_name . '.php';
                });

                $king = new Auteur("KING", "Stephen", "Homme", "1985-01-17");
                $ca = new Livre("Ca", 1980, 120, 9.99, $king);
                $carrie = new Livre("Carrie", 1982, 145, 19.99, $king);
                $cujo = new Livre("Cujo", 1984, 220, 7.99, $king);

                echo $king->afficherBibliographie();
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>