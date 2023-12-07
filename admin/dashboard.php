<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <script src="../js/dashboard.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Admin Dashboard</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #fff; /* White border for cells */
        }

        th {
            background-color: #2a2a2a; /* Hex color for header background */
            color: #fff; /* Text color for header */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Hex color for even rows */
        }

        tr:nth-child(odd) {
            background-color: #ddd; /* Hex color for odd rows */
        }

        :root{
            --card-color: #0c2040;
            --bg-color: #2a2a2a;
            --second-color: #202020;
            --text-color: #2a2a2a;
            --second-color: #ccc;
            --main-color: #dda53c;
            --big-font: 5rem;
            --h2-font: 3rem;
            --p-font: 1.1rem;
        }
    </style>
</head>

<body>

    <div class="topnav">
        <h1 class="page-name">Dashboard</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
    </div>

    <div class="sidenav">
        <div class="logo">
            <img src="../images/kingmeal.png" alt="Your Logo">
            <h1>King Meal<br>Family Restaurant</h1>
        </div>
        <a href="../index.php">Home</a>
        <a href="../index.php#menu">Menu</a>
        <a href="../index.php#contact">Contact</a>
        <a href="chasier.php" >Cashier</a>
        <a href="kitchen.php" >Kitchen</a>

        <a href="index.php">Login</a>
        <a href="../pages/register.php">Register</a>
        <a href="../pages/profile.php">Profile</a>
    </div>

    <div class="main">

        <section class="special" id="special">
            <div class="main-text"> 
                <h2 style="color:#fff">Today <span>Special</span></h2>
            </div>
            <div class="card-col">

                <?php
                // Connect to the database and retrieve menu items
                $db = new mysqli("localhost", "root", "", "hotel");
                $query = "SELECT * FROM todayspecial";
                $result = $db->query($query);

                // Check if there are rows in the result
                if ($result->num_rows > 0) {
                    // Display the data in a table
                    echo '<table border="1">';
                    echo '<tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['itemName'] . '</td>';
                        echo '<td>' . $row['itemCode'] . '</td>';
                        echo '<td>' . $row['price'] . '</td>';
                        echo '<td>' . $row['description'] . '</td>';
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

            </div>
        </section>

        <div class="special" id="special">
            <div class="main-text" style="margin-top: 20px;"> <!-- Adjust margin-top value as needed -->
                <h2 style="color:#fff">Top <span>Customer</span></h2>
            </div>
            <div class="card-row">

                <?php
                // Connect to the database and retrieve customer items
                $db = new mysqli("localhost", "root", "", "hotel");
                $query = "SELECT * FROM customer";
                $result = $db->query($query);

                // Check if there are rows in the result
                if ($result->num_rows > 0) {
                    // Display the data in a table
                    echo '<table>';
                    echo '<tr>
                            <th>Customer Name</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Email</th>
                        </tr>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['customerName'] . '</td>';
                        echo '<td>' . $row['tpNumber'] . '</td>';
                        echo '<td>' . $row['address'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
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
            </div>
        </div>

        <section class="special" id="special">
            <div class="main-text"> 
                <h2 style="color:#fff">Top <span>Orders</span></h2>
            </div>
            <div class="card-row">

                <?php
                // Connect to the database and retrieve menu items
                $db = new mysqli("localhost", "root", "", "hotel");
                $query = "SELECT * FROM orders";
                $result = $db->query($query);

                // Check if there are rows in the result
                if ($result->num_rows > 0) {
                    // Display the data in a table
                    echo '<table border="1">';
                    echo '<tr>
                            <th>Order ID</th>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Order Method</th>
                            <th>Total Cost</th>
                            <th>Status</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                        </tr>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['orderId'] . '</td>';
                        echo '<td>' . $row['itemCode'] . '</td>';
                        echo '<td>' . $row['itemName'] . '</td>';
                        echo '<td>' . $row['orderMethod'] . '</td>';
                        echo '<td>' . $row['totalCost'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
                        echo '<td>' . $row['startTime'] . '</td>';
                        echo '<td>' . $row['endTime'] . '</td>';
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
            </div>
        </section>

    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Database Tables</h2>
            <div id="table-data"></div>
        </div>
    </div>

</body>

</html>
