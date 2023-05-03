<?php

require_once('src/model.php');
require_once('src/model/comment.php');

function bikesModels(string $identifier)
{
    $bikeProducer = getBikeProducer($identifier);
    $bikesModels = getBikesModels($identifier);
    $comments = getComments($identifier);

    require('templates/bikes_models.php');
}
