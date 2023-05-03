<?php

namespace Application\Model\Post;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Post
{
    public string $title;
    public string $frenchCreationDate;
    public string $author;
    public string $content;
    public string $identifier;
}

class PostRepository
{
    public DatabaseConnection $connection; 

    public function getPost(string $identifier): Post
    {
        $this->connection->getConnection()->exec("SET lc_time_names = 'fr_FR'");
    
        $statement = $this->connection->getConnection()->prepare("
            SELECT id, title, content, 
                DATE_FORMAT(creation_date, '%d %M %Y à %H:%i:%s') AS french_creation_date 
            FROM posts 
            WHERE id = ?
        ");
        $statement->execute([$identifier]);
    
        $row = $statement->fetch();
        $post = new Post;
        $post->title = $row['title'];
        $post->frenchCreationDate = $row['french_creation_date'];
        $post->content = $row['content'];
        $post->identifier = $row['id'];
    
        return $post;
    }

    function getPosts(): array
    {
        //$this->connection->getConnection()->exec("SET lc_time_names = 'fr_FR'");

        $statement = $this->connection->getConnection()->query("
            SELECT id, title, author, content, 
                DATE_FORMAT(creation_date, '%d %M %Y à %H:%i:%s') AS creation_date_fr 
            FROM posts 
            ORDER BY creation_date 
            DESC LIMIT 0, 5
        ");
        $posts = [];
        while (($row = $statement->fetch())) {
            $post = new Post();
            $post->title = $row['title'];
            $post->frenchCreationDate = $row['creation_date_fr'];
            $post->author = $row['author'];
            $post->content = $row['content'];
            $post->identifier = $row['id'];

            $posts[] = $post;
        }

        return $posts;
    }
}