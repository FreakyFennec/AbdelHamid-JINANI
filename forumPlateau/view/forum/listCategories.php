<?php
    $categories = $result["data"]['categories'];
?>

<h1>liste categories</h1>

<table>
        <thead>
            <tr>
                <th>id</th>
                <th>Categories</th>
            </tr>
        </thead>
        <tbody>

<?php
    foreach($categories as $categorie) {
        ?>
        
        <tr>
            <td><?=$categorie->getId()?></td>
            <td><a href="index.php?ctrl=forum&action=listTopicsByCategorie&id=<?= $categorie->getId() ?>"><?= $categorie->getNom() ?></td>
        </tr>
        <?php
    }
?>
        </tbody></table>

<form method="post" action="index.php?ctrl=forum&action=addCategorie">

    <label for="nom">Ajouter une catégorie</label>
    <input type="text" name="nom">

    <input type="submit" name="submit" value="Envoyer">
</form>