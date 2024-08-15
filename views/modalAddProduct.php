<div id="modalAddProduct" class="modal" style="display:block;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">×</span>
        <h2>Agregar Producto</h2>
        <form id="product-form" method="post" action="index.php">
            <input type="hidden" name="action" value="add_product">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" required><br>
            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio" step="0.01" required><br>
            <button type="submit">Agregar</button>
        </form>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('modalAddProduct').style.display = 'none';
    }
</script>