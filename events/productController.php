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
    
    public function showAddProductForm(): void {
        include './Views/modaladdproduct.php';
    }
    
    public function addProduct(): void {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST['nombre'];
            $stock = $_POST['stock'];
            $precio = $_POST['precio'];
            $success = $this->productModel->addProduct($nombre, $stock, $precio);
            if ($success) {
                header("Location: index.php");
                exit();
            } else {
                exit("Error añadiendo el producto");
            }}
    }
}
?>
