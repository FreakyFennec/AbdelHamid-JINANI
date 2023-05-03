<?php
    $posts = $result["data"]['posts'];
    $topic = $result["data"]["topic"];
?>

<h1 class="title-page">liste Posts</h1>

<h2><?= $topic ?></h2>

<?php
    if (isset($posts)) {
     ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>creationdate</th>
                <th>user</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>

    <?php

        foreach($posts as $post){
        
            ?>
            <tr>
                <td><?=$post->getId()?></td>
                <td><?=$post->getText()?></td>
                <td><?= $post->getDatePost() ?></td>
                <td><?= $post->getUser() ?></td>
                <td>
                    <?php
                    // Si le user existe 
                    if(!$post->getUser() == null) {
                    
                        // vérifier que le post appartient à l'utilisateur connecté
                        if($post->getUser()->getId() == App\Session::getUser()->getId()) { ?>
                            <a href="index.php?ctrl=forum&action=removePost&id=<?=$post->getId() ?>">Del</a>
                        <?php }
                    } ?>
                    
                </td>
            </tr>
            <?php
        }
    }
?> 

</tbody>
</table>

<h2>Ajouter un post</h2>

<form method="POST" action="index.php?ctrl=forum&action=addPost&id=<?= $topic->getId() ?>">

    <label for="text">Titre du post : </label>
    <input type="text" name="text">
   
    <input type="hidden" name="topic_id" value="<?=$topic->getId()?>">

    <input type="submit" name="submit" value="Envoyer">

</form>