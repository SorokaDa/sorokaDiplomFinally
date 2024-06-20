<form action="korzina-handler.php" method="POST" id="orderForm">
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div name="modal-body" class="modal-body">
                    <table class="show-cart table"></table>
                    <div>Total price: $<span name="total_price" class="total-cart" id="total_price"></span></div>
                    <div class="form-group">
                        <label for="deliveryAddress">Delivery information(adres and number):</label>
                        <input type="text" id="deliveryAddress" name="delivery_address" class="form-control" placeholder="Enter your delivery address" required>
                    </div>
                </div>
                <input type="hidden" id="hidden-price" name="total_price">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Order now</button>
                </div>
            </div>
        </div>
    </div>
</form>