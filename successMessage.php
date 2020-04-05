<?php header("refresh: 5;url=/signInUp.php"); ob_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="success_container ">
<div class="success_msg">
    <h2>Welcome to Shoppy</h2>
    <p>Registration Success</p>
    <span>You can <a href="./signInUp.php">login</a> now</span>
</div>
</div>

</body>
</html>
<?php ob_end_flush();?>