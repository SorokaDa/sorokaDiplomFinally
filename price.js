document.getElementById('orderForm').addEventListener('submit', function (e) {
    var totalSpan = document.querySelector('.total-cart').textContent;
    var totalPriceInput = document.getElementById('hidden-price');

    // Check if the span is not empty
    if (totalSpan.trim() !== "") {
        totalPriceInput.value = totalSpan;
    }
});
