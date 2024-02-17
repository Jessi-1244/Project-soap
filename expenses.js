function addExpenseRow() {
    var expenseTable = document.getElementById('expenseTable');
    var newRow = expenseTable.insertRow(-1); // Insert new row at the end of the table
    
    // Add cells to the new row
    var dateCell = newRow.insertCell(0);
    var expenseTypeCell = newRow.insertCell(1);
    var totalExpenseCell = newRow.insertCell(2);
    var resetCell = newRow.insertCell(3);
    var submitCell = newRow.insertCell(4);
    var fileCell = newRow.insertCell(5);
    
    // Populate cells with input elements
    dateCell.innerHTML = 'Date:';
    dateCell.innerHTML = '<input type="date">';
    expenseTypeCell.innerHTML = 'Expense Type';
    expenseTypeCell.innerHTML = '<input class="expense-type" type="text" placeholder="Enter the Expense Type">';
    totalExpenseCell.innerHTML = 'Total Expense';
    totalExpenseCell.innerHTML = '<input class="total-expense" type="number">';
    resetCell.innerHTML = '<input type="reset">';
    submitCell.innerHTML = '<input type="submit">';
    fileCell.innerHTML = '<input type="file">';
}
