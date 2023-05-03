<?php
$pseudo = $_GET['pseudo'];

// Echappement des caractères spéciaux.
$pseudo = $pdo->quote($pseudo);
