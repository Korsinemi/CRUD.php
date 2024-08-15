function filterProducts() {
    var input, filter, table, rows, cell, text;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("productsTable");
    rows = table.getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        cell = rows[i].getElementsByTagName("td")[1];
        if (cell) {
            text = cell.textContent || cell.innerText;
            if (text.toUpperCase().indexOf(filter) > -1) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
}
