<?php
require_once 'Flower.php';
class FlowerManager
{

    public function findAll()
    {

        // Connect
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');

        // query 
        $results = $pdo->query('SELECT * FROM flowers');

        $results->setFetchMode(PDO::FETCH_CLASS, 'Flower');

        // fetch all flowers
        $flowers = $results->fetchAll();

        return $flowers;
    }
}
