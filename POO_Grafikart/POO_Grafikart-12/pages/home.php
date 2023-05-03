
<H2 class="title">Home page</h2>

<p><a href="index.php?p=single">Single</a></p>

<?php
    $pdo = new PDO('mysql:dbname=blog;host=localhost','root', '');  // Connexion à la bdd.

    // La fonction setAttribute(int, value) permet de définir les options les unes après les autres.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Affichage des erreurs.

    $res = $pdo->query('SELECT *
                        FROM articles');

    ?>
    <pre><?= var_dump($res); ?></pre>

    <?php
    // 
    $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre"');

?>
    <pre><?= var_dump($count); ?></pre>
    