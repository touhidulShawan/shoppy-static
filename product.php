<?php
session_start();
require "./db/connect.php";
$db = new Database();
$connection = $db->getConnection();
$sql = "SELECT * FROM $tableName";
$result = $connection->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        $product_id = $row['product_id'];
        $product_img = $row['product_img'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];

        if ($_SESSION["uEmail"]) {
            echo "<div class=\"product_card\">
              <div class=\"product_img\">
                <img
                  src=\"../img/collections/$tableName/$product_img\"
                  alt=\"product image\"
                />
              </div>
              <div class=\"product_card--body\">
                <h4 class=\"product_title\">$product_name</h4>
                <span class=\"product_price\">$$product_price</span>
              </div>
              <div class=\"product_card--footer\">
                <form action=\"\" class=\"product_quantity-form\">
                  <input
                    type=\"number\"
                    name=\"product_quantity\"
                    id=\"product_quantity\"
                    value=\"1\"
                  />
                  <input type=\"submit\" value=\"Add to cart\" class=\"btn_add-cart\" />
                </form>
              </div>
            </div>";
        }
        else {
            echo "<div class=\"product_card\">
              <div class=\"product_img\">
                <img
                  src=\"../img/collections/$tableName/$product_img\"
                  alt=\"product image\"
                />
              </div>
              <div class=\"product_card--body\">
                <h4 class=\"product_title\">$product_name</h4>
                <span class=\"product_price\">$$product_price</span>
              </div>
              <div class=\"product_card--footer\">
                <form action=\"\" class=\"product_quantity-form\">
                  <input
                    type=\"number\"
                    name=\"product_quantity\"
                    id=\"product_quantity\"
                    value=\"1\"
                  />
                  <a href='./signInUp.php' type=\"button\"  class=\"btn_add-cart\">Please sign in</a>
                </form>
              </div>
            </div>";
        }
    }
}
$connection->close();
?>