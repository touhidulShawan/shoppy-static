<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spring Collections</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <?php require "navbar.php" ?>
    <!-- navbar end  -->
    <!-- main content start  -->
    <div class="container collection_container">
      <h2 class="collection_header">
        Our spring collections
      </h2>
      <div class="product_container">
          <?php
          $tableName = 'spring';
          include "./product.php";
          ?>
      </div>
    </div>
    <!-- main content end  -->
  </body>
</html>
