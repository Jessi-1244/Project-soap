<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customer_name = $_POST["customer_name"];
    $product = $_POST["product"];
    $price_per_product = $_POST["price_per_product"];
    $quantity = $_POST["quantity"];
    
    // Calculate amount
    $amount = $price_per_product * $quantity;

    // Insert billing information into database
    $sql = "INSERT INTO purchase_details (customer_name, product, price_per_product, quantity, amount)
            VALUES ('$customer_name', '$product', '$price_per_product', '$quantity', '$amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Billing successfully entered.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
