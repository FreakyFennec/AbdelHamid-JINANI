<?php
 
    $topics = $result["data"]['topics'];
    

    if (isset($result["data"]['categorie'])) {

        $categorie = $result["data"]['categorie'];
    } 
    
    if (isset($result["data"]['categories'])){
        $categories = $result["data"]['categories'];
    }
?>

<h1 class="title-page">liste topics</h1>

<h2>
    <?php
        if(isset($categorie)) {
            echo $categorie;
        } 
    ?>
</h2>

<?php
    // Condition s'il n'y a rien a afficher.
    if (isset($topics)) {
        ?>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>creationdate</th>
                    <th>closed</th>
                    <th>user</th>
                    <th>delete</th>
                </tr>
            </thead>
        <tbody> 

        <?php
        foreach($topics as $topic){
            ?>
                <tr>
                    <td><?=$topic->getId()?></td>
                    <td><a href="index.php?ctrl=forum&action=listPostsById&id=<?= $topic->getId() ?>"><?= $topic ?></a></td>
                    <td><?=$topic->getCreationdate()?></td>
                    <td><?=$topic->getClosed()?></td>
                    <td><?=$topic->getUser()?></td>

                    <?php
                    
                                            
                    if(App\Session::getUser()) {

                        if(App\Session::getUser()->getStatus() == 'admin') {
                                ?>
                                <td><a href="index.php?ctrl=forum&action=removeTopicAndHisPosts&id=<?= $topic->getId() ?>">Del</a></td>
            
                        <?php } elseif(App\Session::getUser()->getStatus() == 'moderator') {
                            ?>   
                                <td><a href="index.php?ctrl=forum&action=removeTopicAndHisPosts&id=<?= $topic->getId() ?>">Del</a></td>
            
                        <?php } elseif(!$topic->getUser() == null) {
            
                                if($topic->getUser()->getId() == App\Session::getUser()->getId()) { 
                        ?>
                                    <td><a href="index.php?ctrl=forum&action=removeTopicAndHisPosts&id=<?= $topic->getId() ?>">Del</a></td>
            
                        <?php }
                        ?>
                        
                    <?php } ?>                           
                    <?php }
                     

                    ?>
                    
                </tr>
            <?php
        }
    }
?>       
    </tbody>
</table>



<form action="index.php?ctrl=forum&action=addTopic" method="post">
    <label for="title">Ajouter topic</label>
    <input type="text" name="title"><br>

    <label for="text">Titre du post : </label>
    <input type="text" name="text">
    
    <?php
    if(isset($_GET["id"])) {
        ?>
            <input type="hidden" name="categorie_id" value="<?= $_GET["id"] ?>">
        <?php } else {
            ?>
            <label>Catégorie : </label>
            <select name="categorie_id">
        <?php
        
        foreach($categories as $categorie) {
            ?>
                <option value="<?= $categorie->getId() ?>"><?= $categorie->getNom() ?></option>
            <?php } ?></select>
    <?php }
?>
    
    <input type="hidden" name="user_id" value="<?= App\Session::getUser()->getId() ?>">

    <input type="submit" name="submit" value="Send">
</form> 