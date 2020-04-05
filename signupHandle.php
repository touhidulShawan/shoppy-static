<?php
session_start();
require "./db/connect.php";
$db = new Database();
$connection = $db->getConnection();

$emailErr = $passErr = $confirmPassErr = "";
$email = $pass = $confirmPass = "";
$isError = array();
//form validation
if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    handle email input
    if (empty($_POST['signUpEmail'])) {
        $emailErr = "Email is required";
        array_push($isError, true);
    } else {
        $email = check_input($_POST['signUpEmail']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            array_push($isError, true);
        }
    }
//    handle password input
    if (empty($_POST['signUpPassword'])) {
        $passErr = "Password is required";
        array_push($isError, true);
    } else {
        $pass = check_input($_POST["signUpPassword"]);
    }

//    handle confirm password
    if (empty($_POST['confirmSignUpPassword'])) {
        $confirmPassErr = "Password is required";
        array_push($isError, true);
    } else {
        $confirmPass = check_input($_POST["confirmSignUpPassword"]);
        if ($confirmPass != $pass) {
            $confirmPassErr = "Password does not match";
            array_push($isError, true);
        }
    }

}
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['registration'])) {
    $email = mysqli_real_escape_string($connection, $email);
    $pass = mysqli_real_escape_string($connection, $pass);

//    check the database
    $user_check_sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $connection->query($user_check_sql);
    $user = $result->fetch_assoc();
//    first check user exists or not
    if ($user) {
        if ($user['email'] == $email) {
            $emailErr = "Already this email has been registered";
            array_push($isError, true);
        }
    }
//    finaly register user
    if (count($isError) == 0) {
        $finalPass = md5($pass);
        $insert_sql = "INSERT INTO users(email, password) VALUES('$email', '$finalPass')";
        $connection->query($insert_sql);
        $connection->close();
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are logged in";
        header('location: successMessage.php');
    }

}
