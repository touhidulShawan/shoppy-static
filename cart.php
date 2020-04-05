<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <?php require "navbar.php" ?>
    <!-- navbar end  -->
    <div class="container cart_container">
      <!-- product that will be added to cart with product name and price and quantity  -->
      <div class="cart__products">
        <!-- single product  -->
        <div class="product-container">
          <div class="product-image">
            <img src="../img/Jackets/jacket_one.jpg" alt="product image" />
          </div>
          <div class="product-details">
            <h3 class="product-name">Cool Jacket</h3>
          </div>
          <div class="product-price">
            <p>$45</p>
          </div>
          <div class="product-quantity">
            <form action="">
              <input
                type="number"
                name="product-quantity"
                id="product-quantity"
                value="1"
              />
            </form>
          </div>
          <div class="remove-product">
            <button id="close-btn">X</button>
          </div>
        </div>
        <div class="cart_product-footer">
          <div class="continue-shopping">
            <a href="winter.php">Continue Shopping</a>
          </div>
          <div class="total-price">
            <span>Total Price: $431</span>
          </div>
        </div>
      </div>
      <!-- payment option  -->
      <div class="payment__option">
        <div class="walletIcon">
          <i
            ><object
              data="../img/icons/wallet-solid.svg"
              type="image/svg+xml"
            ></object
          ></i>
        </div>
        <div class="payment_details">
          <h2>Place order</h2>
          <span class="message">only cash on delivery now available</span>
          <button class="placeOrderBtn">Place Order</button>
        </div>
      </div>
    </div>
  </body>
</html>
