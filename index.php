<?php

require_once 'settings/connect.php';
require_once 'events/productController.php';

$productController = new ProductController();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $action = $_GET['action'] ?? '';

    switch ($action) {
        case 'modalAdd':
            include './views/modalAddProduct.php';
            break;
    }

    $productController->showProducts();
}

elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'add_product':
            $productController->addProduct();
            break;
    }

    header("Location: index.php");
    exit();
}

else {
    header("Location: index.php");
    exit();
}

?>
