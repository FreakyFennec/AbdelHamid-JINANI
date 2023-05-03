<?php 

require_once('src/model.php');

function homepage()
{        
    $bikeProducers = getBikeProducers();

    require('templates/homepage.php');
}


