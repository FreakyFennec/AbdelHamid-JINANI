<?php

require_once('src/model/comment.php');

function addComment(string $bikes_model, array $input)
{
    $author = null;
    $comment = null;

    if(!empty($input['author']) && !empty($input['comment'])) {
        $author = $input['author'];
        $comment = $input['comment'];
    } else {
        die('Les données du formulaire sont invalides.');
    }

    $success = createComment($bikes_model, $author, $comment);
    if (!$success) {
        die('Impossible d\'ajouter le commentaire.');
    } else {
        header('Location : index.php?action=bikesModel&id=' . $bikes_model);
    }

}