<?php 

function getBikeProducers()
{
    $db = dbconnect();
    
    // Retrieve data
    $statement = $db->query("
        SELECT constr_velos_id, constr_velos_nom, logo_constr, alt_logo_constr, pays_constr_id AS constr, p.pays_nom, p.pays_id AS pays
        FROM constr_velos c
        LEFT JOIN Pays p 
            ON P.pays_constr_id = c.pays_constr_velos
        ORDER BY pays_nom
    ");
    $bikeProducers = [];
    while (($row = $statement->fetch())) {
        $bikeProducer = [
            'pays_nom' => $row['pays_nom'],
            'constr_velos_nom' => $row['constr_velos_nom'],
            'logo_constr' => $row['logo_constr'],
            'alt_logo_constr' => $row['alt_logo_constr'],
            'identifier' => $row['constr_velos_id'],
        ];
    
        $bikeProducers[] = $bikeProducer;
    }

    return $bikeProducers;
}

function getBikeProducer($identifier)
{
    $db = dbconnect();
    
    // Retrieve data
    $statement = $db->prepare("
        SELECT constr_velos_id, constr_velos_nom, logo_constr, alt_logo_constr
        FROM constr_velos
        WHERE constr_velos_id = ?
    ");
    $statement->execute([$identifier]);

    $row = $statement->fetch();
    $bikeProducer = [
        'constr_velos_nom' => $row['constr_velos_nom'],
        'logo_constr' => $row['logo_constr'],
        'alt_logo_constr' => $row['alt_logo_constr'],
        'identifier' => $row['constr_velos_id'],
    ];

    return $bikeProducer;
}


function getBikesModels($identifier)
{
    $db = dbconnect();
    
    // Retrieve data
    $statement = $db->prepare("
        SELECT mod_nom, mod_annee, constr_mod_id,
            DATE_FORMAT(mod_annee, '%Y') AS annee
        FROM modeles
        WHERE constr_mod_id = ?
        ORDER BY annee
    ");
    $statement->execute([$identifier]);

    $bikesModels = [];
    while (($row = $statement->fetch())) {
        $bikesModel = [
            'mod_nom' => $row['mod_nom'],
            'mod_annee' => $row['mod_annee'],
            'constr_mod_id' => $row['constr_mod_id'],
            'identifier' => $row['constr_mod_id'],
        ];
        $bikesModels[] = $bikesModel;
    }

    return $bikesModels;
}

function dbconnect()
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



