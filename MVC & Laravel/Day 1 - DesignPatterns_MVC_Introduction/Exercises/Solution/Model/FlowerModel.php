<?php

class FlowerModel
{

    // Get PDO Connection
    private function getPDO()
    {
        return new PDO('mysql:host=localhost;dbname=flower_db;charset=utf8', 'root', '');
    }

    // Get all the flowers
    public function getFlowers()
    {
        // Connect to the DB 
        $pdo = $this->getPDO();

        // Send the query to the DB
        $results = $pdo->query('SELECT * FROM flowers');

        // Fetch as associative array
        $flowers = $results->fetchAll(PDO::FETCH_ASSOC);

        // Close connection / release memory
        $pdo = null;

        return $flowers;
    }

    public function getFlower($id)
    {
        $pdo = $this->getPDO();

        $prep = $pdo->prepare('SELECT * FROM flowers WHERE id = ?');
        $prep->bindValue(1, $id);
        $prep->execute();

        $flower = $prep->fetch(PDO::FETCH_ASSOC);

        // Close connection / release memory
        $pdo = null;

        return $flower;
    }
}
