<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Page</title>
    <link rel="stylesheet" href="salespage.css">
</head>
<body>
    <form method="post" action="save_sales.php">
        <center>
            <table>
                <tr>
                    <td>Date :</td><td><input id="dateInput" type="date" name="date"></td>
                </tr>
                <tr>
                    <td>Product Name :</td><td><input id="productNameInput" type="text" placeholder="Enter the Product name" name="productName"></td>
                </tr>
                <tr>
                    <td>Quantity</td><td><input id="quantityInput" type="number" onchange="calculateTotalPrice()" name="quantity"></td>
                </tr>
                <tr>
                    <td>Per Quantity Price</td><td><input id="perQuantityPriceInput" type="number" onchange="calculateTotalPrice()" name="perQuantityPrice"></td>
                </tr>
                <tr>
                    <td>Total Price</td><td><input id="totalPriceInput" type="text" readonly name="totalPrice"></td>
                </tr>
                <tr>
                    <td><input type="reset"></td><td><input type="submit"></td>
                </tr>
            </table>
        </center>
    </form>
    <script src="salespage.js"></script>
</body>
</html>

<script>
function calculateTotalPrice() {
    var quantity = parseFloat(document.getElementById("quantityInput").value);
    var perQuantityPrice = parseFloat(document.getElementById("perQuantityPriceInput").value);
    var totalPrice = quantity * perQuantityPrice;
    document.getElementById("totalPriceInput").value = isNaN(totalPrice) ? '' : totalPrice.toFixed(2);
}
</script>
