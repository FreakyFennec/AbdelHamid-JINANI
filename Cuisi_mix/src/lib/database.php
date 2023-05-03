<?php
// Encapsulation de la connexion PDO dans la propriété $database.

namespace Application\Lib\Database;

class DatabaseConnection
{
    // (?PDO) Le point d'interrogation est un opérateur de type hinting
    // il permet de spécifier le type attendu, ici c'est PDO ou null.
    // $database est une variable de type objet de la classe PDO.
    public ?\PDO $database = null; 

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=cuisi_mix;charset=utf8', 'root', '');
        }

        return $this->database; // Retourne une instance de PDO.
    }
}