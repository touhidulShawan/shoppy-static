<?php session_start() ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SHOPPY || Home</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
<!--    navabr -->
<?php include "navbar.php"?>
<!-- alert  -->
<!-- <div class="container" id="alert_container">
<div class="alert">
    <p class="alertMsg">Please sign in first</p>
    <button id="alertClose" onclick="closeBtn()"></button>
</div>
</div> -->
<!-- collections navigation start -->
<?php require "collection-navigation.php"?>
<!-- collections navigation end  -->
<script src="./js/alert.js"></script>
</body>
</html>
