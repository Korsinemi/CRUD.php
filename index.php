<?php

require_once 'settings/connect.php';
require_once 'events/productController.php';

$productController = new ProductController();
$productController->showProducts();

?>
