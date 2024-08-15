<?php
print("<br>Controlador<br>");

require_once './models/ProductModel.php';

class ProductController
{
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
            }
        }
    }

    public function showUpdateProductForm(int $id): void {
        $producto = $this->productModel->getProductById($id);
        include './views/modalUpdateProduct.php';
    }

    public function updateProduct(): void {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $stock = $_POST['stock'];
            $precio = $_POST['precio'];
            $success = $this->productModel->updateProduct($id, $nombre, $stock, $precio);
            if ($success) {
                header("Location: index.php");
                exit();
            } else {
                exit("Error actualizando el producto");
            }
        }
    }

    public function deleteProduct(int $id): void {
        $success = $this->productModel->deleteProduct($id);
        if ($success) {
            header("Location: index.php");
            exit();
        } else {
            exit("Error eliminando el producto");
        }
    }    
}
?>