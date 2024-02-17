<?php
// Database configuration
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "shop_management"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Define variables and initialize with empty values
$date = $productName = $quantity = $perQuantityPrice = $totalPrice = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $date = $_POST["date"];
    $productName = $_POST["productName"];
    $quantity = $_POST["quantity"];
    $perQuantityPrice = $_POST["perQuantityPrice"];
    $totalPrice = $_POST["totalPrice"];

    // Insert data into database
    $sql = "INSERT INTO sales (date, product_name, quantity, per_quantity_price, total_price) 
            VALUES ('$date', '$productName', '$quantity', '$perQuantityPrice', '$totalPrice')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
