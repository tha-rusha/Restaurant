// JavaScript code
function loadDatabaseTables() {
    // This is a placeholder function to load database tables.
    // You can replace it with your actual code to fetch and display the tables.

    // For demonstration purposes, let's assume we have some table names.
    const tableNames = ["Table 1", "Table 2", "Table 3", "Table 4"];

    const tableDataElement = document.getElementById("table-data");
    tableDataElement.innerHTML = ""; // Clear previous data

    for (const tableName of tableNames) {
        const tableItem = document.createElement("p");
        tableItem.textContent = tableName;
        tableDataElement.appendChild(tableItem);
    }

    openModal(); // Display the modal
}

function openModal() {
    const modal = document.getElementById("myModal");
    modal.style.display = "block";
}

function closeModal() {
    const modal = document.getElementById("myModal");
    modal.style.display = "none";
}

window.onclick = function (event) {
    const modal = document.getElementById("myModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
};
