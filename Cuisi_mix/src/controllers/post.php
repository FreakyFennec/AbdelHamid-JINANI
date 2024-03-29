<?php

namespace Application\Controllers\Post;
 
require_once('src/lib/database.php');
require_once('src/model/comment.php');
require_once('src/model/post.php');

use \Application\Lib\Database\DatabaseConnection;
use \Application\Model\Comment\CommentRepository;
use \Application\Model\Post\PostRepository;

class Post
{
    public function execute(string $identifier)
    {
        $connection = new DatabaseConnection();

        $postRepository = new PostRepository();
        $postRepository->connection = $connection;
        $post = $postRepository->getPost($identifier);

        $commentsRepository = new CommentRepository();    
        $commentsRepository->connection = $connection;
        $comments = $commentsRepository->getComments($identifier);

        require('templates/post.php');
    }
}
    

