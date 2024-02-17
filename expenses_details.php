<?php
// Database configuration
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
    $date = $_POST["date"];
    $expenseTypes = isset($_POST["expenseType"]) ? $_POST["expenseType"] : array(); // Check if expenseType is set and assign an empty array if not
    $totalExpenses = isset($_POST["totalExpense"]) ? $_POST["totalExpense"] : array(); // Check if totalExpense is set and assign an empty array if not

    // Ensure both arrays are of the same length
    $numExpenses = count($expenseTypes);
    $numTotalExpenses = count($totalExpenses);
    if ($numExpenses != $numTotalExpenses) {
        die("Error: Number of expense types does not match number of total expenses.");
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO expenses (date, expense_type, total_expense) VALUES (?, ?, ?)");

    // Iterate through the arrays to insert each expense detail
    for ($i = 0; $i < $numExpenses; $i++) {
        $expenseType = $expenseTypes[$i];
        $totalExpense = $totalExpenses[$i];

        // Bind parameters to the prepared statement
        $stmt->bind_param("sss", $date, $expenseType, $totalExpense);

        // Execute the prepared statement
        if ($stmt->execute() === TRUE) {
            echo "Expense details inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
