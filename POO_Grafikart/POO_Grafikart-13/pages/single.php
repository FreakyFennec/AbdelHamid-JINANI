<?php

    $db = new App\Database('blog');
?>
<?php

    $post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);    // Requête préparée pour éviter les injections sql.

?>
<h1><?= $post->titre; ?></h1>

<p><?= $post->contenu; ?></p>
