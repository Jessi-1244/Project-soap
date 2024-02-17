<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses</title>
    <link rel="stylesheet" href="expensepage.css">
</head>
<body>
    <form method="post" action="expenses_details.php">
        <center>
            <table id="expenseTable">
                <tr>
                <td>Date:</td>
                <td><input id="dateInput" type="date" name="date"></td>
            </tr>
            <tr>
                <td>Expense Type</td>
                <td><input class="expense-type" type="text" placeholder="Enter the Expense Type" name="expenseType[]"></td>
            </tr>
            <tr>
                <td>Total Expense</td>
                <td><input class="total-expense" type="number" name="totalExpense[]"></td>
            </tr>
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit"></td>
            </tr>
            <tr>
                <td><input type="file"></td>
            </tr>
            </table>
            <button onclick="addExpenseRow()">Add Expense</button>
        </center>
     </form>
    <script src="expenses.js"></script>
</body>
</html>
