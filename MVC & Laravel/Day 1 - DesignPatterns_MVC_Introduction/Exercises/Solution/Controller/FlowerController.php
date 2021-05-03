<?php

class FlowerController
{
    private $model;

    public function __construct()
    {
        require_once 'Model/FlowerModel.php';
        $this->model = new FlowerModel();
    }

    public function handleFlowers()
    {
        //1. Ask the model the flowers list
        $flowers = $this->model->getFlowers();

        //2. Check/Do the validations
        if (count($flowers) == 0) {
            $message = 'No flowers found.';
            require_once 'View/ErrorView.php';
        } else {
            //3. Pass flowers list to the view
            require_once 'View/FlowerView.php';
        }
    }

    public function handleFlower($id)
    {
        //1. Ask the model
        $flower = $this->model->getFlower($id);

        //2 Check / Do the validations
        if (!$flower) {
            $message = 'No flower found with this id.';
            require_once 'View/ErrorView.php';
        } else {
            require_once 'View/FlowerDetailView.php';
        }
    }
}
