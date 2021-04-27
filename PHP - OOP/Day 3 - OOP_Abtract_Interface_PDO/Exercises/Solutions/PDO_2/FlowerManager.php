<?php

class FlowerManager
{

    public function findAll()
    {

        // Connect
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');

        // query 
        $results = $pdo->query('SELECT * FROM flowers');

        // fetch all flowers
        $flowers = $results->fetchAll(PDO::FETCH_ASSOC);

        return $flowers;
    }
}
