// Function to load and display database tables
function loadDatabaseTables() {
    // Replace this with your actual database query and data loading logic
    // For demonstration purposes, let's create a sample table data
    const tableData = `
        <table>
            <tr>
                <th>Table Header 1</th>
                <th>Table Header 2</th>
            </tr>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
            </tr>
            <!-- Add more table rows as needed -->
        </table>
    `;

    // Display the table data in the card content
    document.getElementById('table-data').innerHTML = tableData;
}
