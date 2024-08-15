<!-- Archivo: Vistas/productoview.php -->
<!-- Propósito: Vista para mostrar la lista de productos -->

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Productos</title>
</head>
<body>
    <h3>CRUD de Productos</h3>

    <a href="index.php?action=modalAdd">Agregar Producto ➕📁</a>
    <input type="text" id="searchInput" placeholder="Buscar por nombre" onkeyup="filterProducts()">    

    <table class="table" border="1" id="productsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $producto): ?>
                <tr>
                    <td><?=$producto['id']?></td>
                    <td><?=$producto['nombre']?></td>
                    <td><?=$producto['stock']?></td>
                    <td><?=$producto['precio']?></td>
                    <td>
                        <a href="index.php?action=modalUpdate&id=<?= $producto['id'] ?>">✏️</a>
                        <a href="index.php?action=deleteProduct&id=<?= $producto['id'] ?>">🚮</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <script src="./public/script.js"></script>

</body>
</html>