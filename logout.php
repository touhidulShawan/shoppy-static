<?php

session_start();

unset($_SESSION["uID"]);

unset($_SESSION["uEmail"]);

header("location:index.php");

?>
