<?php
    $users = $result["data"]['users'];
?>

<h1 class="title-page">liste users</h1>
<table>
            <thead>
                <tr>
                    <th>user</th>
                    <th>email</th>
                    <th>registerdate</th>
                    <th>status</th>
                    <th>banish</th>
                    <th>delete</th>
                </tr>
            </thead>
        <tbody> 
<?php
    // Condition si status = user
    if(App\Session::getUser()) {

        foreach($users as $user) {
            ?>

            <tr>
                <td><a href="index.php?ctrl=forum&action=listUsers&id=<?= $user->getId() ?>"><?= $user->getPseudo() ?></a></td>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getRegisterDate() ?></td>
                <td><?= $user->getStatus() ?></td>
                <td><?= $user->getBanish() ?></td>
                <td><a href="index.php?ctrl=forum&action=removeById&id=<?= $user->getId() ?>">Del</a> </td>
            </tr>
            
            <?php
        }
    } else {
        
?>

    <form method="post" action="index.php?ctrl=forum&action=removeByPseudo">

        <label for="pseudo">Supprimer un membre</label>
        <input type="text" name="pseudo">

        <input type="submit" name="submit" value="Envoyer">
    </form>

<?php

    }
    
?>      
</tbody>
</table>