document.addEventListener('DOMContentLoaded', function () {
    var quantityInput = document.getElementById('quantity');
    var priceInput = document.getElementById('price_per_product');
    var amountInput = document.getElementById('amount');

    // Calculate amount when quantity or price per product changes
    quantityInput.addEventListener('input', calculateAmount);
    priceInput.addEventListener('input', calculateAmount);

    // Function to calculate amount
    function calculateAmount() {
        var quantity = parseFloat(quantityInput.value);
        var price = parseFloat(priceInput.value);
        var amount = isNaN(quantity) || isNaN(price) ? '' : (quantity * price).toFixed(2);
        amountInput.value = amount;
    }
});
