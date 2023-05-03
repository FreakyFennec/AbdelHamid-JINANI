<?php

namespace Application\Controllers\Comment\Edit;

require_once('src/lib/database.php');
require_once('src/model/comment.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Comment\CommentRepository;

class EditComment
{
    public function execute(string $identifier, ?array $input)
    {
        // It manages the form submission when there is an input.
        if ($input !== null) {
            $author = null;
            $comment = null;
            if (!empty($input['author']) && !empty($input['comment'])) {
                $author = $input['author'];
                $comment = $input['comment'];
            } else {
                throw new \Exception('Les données du formulaires sont invalides.');
            }
        }      

        $commentRepository = new CommentRepository();
        $commentRepository->connection = new DatabaseConnection();
        $success = $commentRepository->editComment($identifier, $author, $comment);
        if (!$success) {
            throw new \Exception('Impossible de modifier le commentaie !');        
        } else {
            header('Location: index.php?action=edit&id='. $identifier);
        }
        
        // Otherwise, it display the form.
        $commentRepository = new CommentRepository();
        $commentRepository->connection = new DatabaseConnection();
        $comment = $commentRepository->getComment($identifier);
        if ($comment === null) {
            throw new \Exception("Le commentaire $identifier n'existe pas.");
        }

        require('templates/edit.php');
    }   
}


