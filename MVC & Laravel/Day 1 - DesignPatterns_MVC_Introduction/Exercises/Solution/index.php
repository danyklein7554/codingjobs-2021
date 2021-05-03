<?php

// Check if there is a request
if (isset($_GET['page'])) {

    // Only accept valid request
    if ($_GET['page'] == 'flowers') {
        // Call movie controller
        require_once 'Controller/FlowerController.php';
        $flowerCtrl = new FlowerController();

        // Check if I get an id
        if (isset($_GET['id']))
            $flowerCtrl->handleFlower($_GET['id']);
        else
            $flowerCtrl->handleFlowers();
    } else {
        $message = 'Page doesnt exists';
        require_once 'View/ErrorView.php';
    }
} else {
    require_once 'View/HomeView.php';
}
