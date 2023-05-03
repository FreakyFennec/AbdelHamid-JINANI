<?php
    $user = $result["data"]['user'];
    $topics = $result["data"]['topics'];
    $posts = $result["data"]['posts'];
    var_dump($posts);
?>

<h1 class="title-page">Profil <?= $user->getPseudo() ?></h1>

<table>
            <thead>
                <tr>
                    <th>email</th>
                    <th>pseudo</th>
                    <th>status</th>
                    <th>banish</th>
                    <th>registerdate</th>
                </tr>
            </thead>
        <tbody> 

<?php
    // Informations sur le user
    
    if(App\Session::getUser()) {
        
        if(App\Session::getUser()->getStatus() == 'admin') { // Visible par l'admin
            ?>
            <tr>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getPseudo() ?></td>
                <td><?= $user->getStatus() ?></td>
                <td><?= $user->getBanish() ?></td>
                <td><?= $user->getRegisterDate() ?></td>
            </tr>

        <?php } elseif(App\Session::getUser()->getStatus() == 'moderator') { // Visible par le modérateur
            ?>
            <tr>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getPseudo() ?></td>
                <td><?= $user->getStatus() ?></td>
                <td><?= $user->getBanish() ?></td>
                <td><?= $user->getRegisterDate() ?></td>
            </tr>

        <?php } elseif(App\Session::getUser()->getStatus() == 'user') { // Visible par le modérateur
            ?>
            <tr>
                <td><?= $user->getPseudo() ?></td>
                <td><?= $user->getStatus() ?></td>
                <td><?= $user->getRegisterDate() ?></td>
            </tr>

        <?php } ?>
    </tbody>
</table>
        <h2>Ses topics</h2>

<table>
            <thead>
                <tr>
                    <th>title</th>
                    <th>creationdate</th>
                    <th>closed</th>
                </tr>
            </thead>
        <tbody>
    <?php
        foreach($topics as $topic) {
            ?>
            <tr>
                <td><?= $topic->getTitle() ?></td>
                <td><?= $topic->getCreationdate() ?></td>
                <td><?= $topic->getClosed() ?></td>
            </tr>
        <?php } ?>      
    </tbody>
</table>
            <h2>Ses posts</h2>
        <table>
            <thead>
                <tr>
                    <th>text</th>
                    <th>datePost</th>
                </tr>
            </thead>
        <tbody>
    <?php
        foreach($posts as $post) {
            ?><tr>
                <td><?= $post->getText() ?></td>
                <td><?= $post->getDatePost() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php }
    // Visible par le user
    
    // Visible par le modérateur
    // Visible par tout le monde


    // Catégories créés par le user

    // Nombres de posts par topics

?>      
    