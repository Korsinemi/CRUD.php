<?php
print("Modelo");
class ProductModel
{
    private PDO $connection;

    public function __construct()
    {
        global $connection;
        $this->connection = $connection;
    }

    public function getProducts(): array
    {
        $statement = $this->connection->query("SELECT * FROM productos");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProduct(string $nombre, int $stock, float $precio): bool
    {
        try {
            $statement = $this->connection->prepare("INSERT INTO productos (nombre, stock, precio) VALUES (?, ?, ?)");
            return $statement->execute([$nombre, $stock, $precio]);
        } catch (PDOException $e) {
            exit("Error agregando el producto: " . $e->getMessage());
        }
    }

    public function getProductById(int $id): array
    {
        $statement = $this->connection->prepare("SELECT * FROM productos WHERE id = ?");
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct(int $id, string $nombre, int $stock, float $precio): bool
    {
        try {
            $statement = $this->connection->prepare("UPDATE productos SET nombre = ?, stock = ?, precio = ? WHERE id = ?");
            return $statement->execute([$nombre, $stock, $precio, $id]);
        } catch (PDOException $e) {
            exit("Error actualizando el producto: " . $e->getMessage());
        }
    }

}
?>