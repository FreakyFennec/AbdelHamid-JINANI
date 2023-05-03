<?php

namespace Application\Model\Comment;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Comment
{
    public string $identifier;
    public string $author;
    public string $frenchCreationDate;
    public string $comment;
}

class CommentRepository
{
    public DatabaseConnection $connection;

    function getComments(string $post): array
    {
        //$this->connection->getConnection()->exec("SET lc_time_names = 'fr_FR'");

        $statement = $this->connection->getConnection()->prepare("
            SELECT id, author, comment,
                DATE_FORMAT(comment_date, '%d %M %Y à %H:%i:%s') AS french_creation_date
            FROM comments
            WHERE post_id = ?
            ORDER BY comment_date DESC
        ");
        $statement->execute([$post]);

        $comments = [];
        while (($row = $statement->fetch())) {        
            $comment = new Comment();
            $comment->identifier = $row['id'];
            $comment->author = $row['author'];
            $comment->frenchCreationDate = $row['french_creation_date'];
            $comment->comment = $row['comment'];
            
            $comments[] = $comment;
        }

        return $comments;
    }

    function createComment(string $post, string $author, string $comment): bool
    {
        $statement = $this->connection->getConnection()->prepare("
            INSERT INTO comments(post_id, author, comment, comment_date)
            VALUEs(?, ?, ?, NOW())
        ");
        $affectelLines = $statement->execute([$post, $author, $comment]);

        return ($affectelLines > 0);
    }

    function editComment(string $identifier, string $author, string $comment): bool
    {
        $statement = $this->connection->getConnection()->prepare("
            UPDATE comments 
            SET author = ?, comment = ?
            WHERE id = ?
        ");
        $affectelLines = $statement->execute([$author, $comment, $identifier]);

        return ($affectelLines > 0);
    }
}
