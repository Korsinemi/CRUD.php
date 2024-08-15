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

}
?>
