<?php
print("<br>Controlador<br>");

require_once './models/ProductModel.php';

class ProductController {
    private ProductModel $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function showProducts() {
        $products = $this->productModel->getProducts();
        include './views/productView.php';
    }

}
?>
