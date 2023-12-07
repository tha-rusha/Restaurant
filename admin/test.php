<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table View</title>
    <!-- Add your styles or include a CSS file here if needed -->
</head>
<body>

    <h2>Database Table View</h2>

    <?php
    // Connect to the database
    $db = new mysqli("localhost", "root", "", "hotel");

    // Check for connection errors
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Fetch data from the database
    $query = "SELECT * FROM orders";
    $result = $db->query($query);

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        // Display the data in a table
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['itemCode'] . '</td>';
            echo '<td>' . $row['itemName'] . '</td>';
            echo '<td>' . $row['status'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        // No data found
        echo 'No data found.';
    }

    // Close the database connection
    $db->close();
    ?>

</body>
</html>
