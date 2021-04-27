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

        // fetch all flowers
        $flowers = $results->fetchAll(PDO::FETCH_ASSOC);

        // Initialize empty array
        $flowersObject = array();

        // Loop the flowers and create, each time, a new Flower object
        foreach ($flowers as $flower) {
            $flowersObject[] = new Flower($flower['id'], $flower['name'], $flower['price']);
        }

        return $flowersObject;
    }
}
