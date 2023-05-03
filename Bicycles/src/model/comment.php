<?php 

function getComments(string $bike_model)
{
    $db = commentDbconnect();
    $statement = $db->prepare("
        SELECT comment_id, author, comment,
            DATE_FORMAT (comment_date, '%d %M %Y à %H:%i:%s') As date_fr
        FROM comments
        WHERE bike_model = ?
        ORDER BY comment_date DESC
    ");
    $statement->execute([$bike_model]);

    $comments = [];
    while (($row = $statement->fetch())) {
        $comment = [
            'author' => $row['author'], 
            'date_fr' => $row['date_fr'],
            'comment' => $row['comment'],
        ];
        
        $comments [] = $comment;
    }

    return $comments;
}

function createComment(string $bike_model, string $author, string $comment) : bool
{
    $db = commentDbConnect();
    $statement = $db->prepare("
        INSERT INTO comments(bike_model, author, comment, comment_date) 
        VALUES(?, ?, ?, NOW())
    ");
    $affectedLines = $statement->execute([$bike_model, $author, $comment]);

    return ($affectedLines > 0);
}



function commentDbconnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=bikes;charset=utf8', 'root', '');
        
        // set the PDO error mode to exception
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}