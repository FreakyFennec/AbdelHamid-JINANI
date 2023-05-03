<h1>S'inscrire</h1>

<form method="POST" action="index.php?ctrl=security&action=addUser">

    <label for="email">Email</label>
    <input type="email" name="email"><br>

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo"><br>

    <label for="password">Mot de passe</label>
    <input type="password" name="password"><br>

    <label for="confirmUserPW">Confirmez votre MP</label>
    <input type="password" name="confirmUserPW"><br>

    <input type="submit" name="submit" value="Envoyer">

</form>