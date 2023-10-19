<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Page</title>
    <style>
        body {
            background-color: #2a2a2a; /* Dark background color */
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margin */
            color: #000000; /* Text color */
        }

        .button-container {
            text-align: center;
            margin-top: 50px;
            display: flex;
            justify-content: space-around; /* Distribute space between buttons */
        }

        .button-container a.button {
            text-decoration: none;
            display: inline-block;
            margin: 10px; /* Adjusted button spacing */
            padding: 15px 30px; /* Increased button padding for height */
            width: 150px; /* Set button width */
            background-color: #dda53c; /* Button color */
            border: none;
            border-radius: 10px;
            color: #ffffff; /* Button text color */
            font-size: 16px;
            cursor: pointer;
        }

        .button-container a.button:hover {
            background-color: #b38329; /* Darker color on hover */
        }

        .section-box {
            background-color: #ffffff; /* White background for section boxes */
            margin: 20px auto;
            max-width: 100%; /* Set section width to page width */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .section-box h2 {
            text-align: left; /* Align section heading to the left */
            margin-bottom: 20px; /* Increase space below section title */
        }

        form {
            text-align: center; /* Center the form */
        }

        .input-container {
            text-align: left; /* Align text to the left within the input container */
            max-width: 300px;
            margin: 0 auto; /* Center the input container */
        }

        form label {
            display: block;
            margin-bottom: 5px; /* Adjusted space between label and input */
        }

        form input {
            width: 100%; /* Full width of input container */
            padding: 8px; /* Adjusted input padding */
            margin-bottom: 15px; /* Adjusted space between input and next label */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .accept-reject-buttons {
            text-align: center;
            margin-top: 20px; /* Increase space above buttons */
        }

        .accept-reject-buttons button {
            margin: 10px;
            font-size: 18px; /* Increased button font size */
            background-color: #dda53c; /* Button color */
            border: none;
            border-radius: 10px;
            color: #ffffff; /* Button text color */
            cursor: pointer;
            padding: 15px 30px; /* Increased button padding for height */
        }

        .accept-reject-buttons button:hover {
            background-color: #b38329; /* Darker color on hover */
        }

        .table-container {
            text-align: center; /* Center the table container */
        }

        .table-box {
            width: calc(50% - 10px);
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            box-sizing: border-box;
            margin: 0 auto; /* Center the table box */
            margin-bottom: 20px; /* Add space between tables */
            background-color: #ccc; /* Table background color */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        .delivery-buttons {
            text-align: center;
            margin-top: 30px; /* Increase space above buttons */
            margin-bottom: 30px; /* Increase space below buttons */
            background-color: #cfe2f3; /* Light blue color */
            padding: 20px;
            border-radius: 10px;
        }

        .delivery-buttons button {
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px; /* Increased button font size */
            background-color: #dda53c; /* Button color */
            border: none;
            border-radius: 10px;
            color: #ffffff; /* Button text color */
            cursor: pointer;
        }

        .message {
            text-align: center;
            margin-top: 20px; /* Increased space between message and input */
            font-weight: bold;
        }

        .section-heading {
            background-color: #5e0707; /* Dark red color */
            color: #ffffff; /* Text color */
            padding: 10px 20px;
            border-radius: 10px;
            text-align: left; /* Align section heading to the left */
            margin-bottom: 20px;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="button-container">
        <a class="button" href="#task-section">Task</a>
        <a class="button" href="#order-section">Order</a>
        <a class="button" href="#delivery-section">Delivery</a>
    </div>

    <div style="height: 50px;"></div> <!-- Added space after buttons -->

    <div class="section-heading">
        <h2>Task Section</h2>
    </div>
    <div id="task-section" class="section-box">
        <form>
            <div class="input-container">
                <label for="taskID">Task ID:</label>
                <input type="text" id="taskID" name="taskID"><br>

                <label for="orderID">Order ID:</label>
                <input type="text" id="orderID" name="orderID"><br>

                <label for="orderName">Order Name:</label>
                <input type="text" id="orderName" name="orderName"><br>

                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity"><br>
            </div>
        </form>

        <div class="accept-reject-buttons">
            <button onclick="showAcceptPopup()">Accept</button>
            <button onclick="showRejectPopup()">Reject</button>
        </div>
    </div>

    <div class="section-heading">
        <h2>Order Section</h2>
    </div>
    <div id="order-section" class="section-box">
        <div class="table-container">
            <div class="table-box">
                <h3 style="text-align: center;">Completed</h3>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Name</th>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>Pizza</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </table>
            </div>

            <div class="table-box">
                <h3 style="text-align: center;">Cancelled</h3>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Name</th>
                        <th>Reason</th>
                    </tr>
                    <!-- Add rows for cancelled orders -->
                    <tr>
                        <td>128</td>
                        <td>Steak</td>
                        <td>Out of stock</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="section-heading">
        <h2>Delivery Section</h2>
    </div>
    <div id="delivery-section" class="section-box">
        <div class="delivery-buttons">
            <button onclick="showDineIn()">Dine In</button>
            <button onclick="showPickUp()">Pick Up</button>
            <button onclick="showDelivery()">Delivery</button>
            <p class="message" id="deliveryMessage"></p><br> <!-- Added br tag -->
        </div>

        <div class="table-container" id="dineInTable" style="display: none;">
            <div class="table-box">
                <h3 style="text-align: center;">Dine In Orders</h3>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Name</th>
                    </tr>
                    <tr>
                        <td>133</td>
                        <td>Steak</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="table-container" id="pickUpTable" style="display: none;">
            <div class="table-box">
                <h3 style="text-align: center;">Pick Up Orders</h3>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Name</th>
                    </tr>
                    <tr>
                        <td>134</td>
                        <td>Pasta</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="table-container" id="deliveryTable" style="display: none;">
            <div class="table-box">
                <h3 style="text-align: center;">Delivery Orders</h3>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Name</th>
                    </tr>
                    <tr>
                        <td>135</td>
                        <td>Pizza</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
        function showDineIn() {
            document.getElementById("dineInTable").style.display = "block";
            document.getElementById("pickUpTable").style.display = "none";
            document.getElementById("deliveryTable").style.display = "none";
            document.getElementById("deliveryMessage").textContent = "Ready to Dine In!";
        }

        function showPickUp() {
            document.getElementById("dineInTable").style.display = "none";
            document.getElementById("pickUpTable").style.display = "block";
            document.getElementById("deliveryTable").style.display = "none";
            document.getElementById("deliveryMessage").textContent = "Ready for Pick Up!";
        }

        function showDelivery() {
            document.getElementById("dineInTable").style.display = "none";
            document.getElementById("pickUpTable").style.display = "none";
            document.getElementById("deliveryTable").style.display = "block";
            document.getElementById("deliveryMessage").textContent = "Ready for Delivery!";
        }

        function showAcceptPopup() {
            alert("Accepted");
        }

        function showRejectPopup() {
            alert("Rejected");
        }
    </script>

</body>

</html>
