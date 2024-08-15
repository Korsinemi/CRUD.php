<?php
print("Modelo");
class ProductModel {
    private PDO $connection;

    public function __construct() {
        global $connection;
        $this->connection = $connection;
    }

    public function getProducts(): array {
        $statement = $this->connection->query("SELECT * FROM productos");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProduct(string $nombre, int $stock, float $precio): bool {
        try {
            $statement = $this->connection->prepare("INSERT INTO productos (nombre, stock, precio) VALUES (?, ?, ?)");
            return $statement->execute([$nombre, $stock, $precio]);
        } catch (PDOException $e) {
            exit("Error adding the product: " . $e->getMessage());
        }
    }    
}
?>
