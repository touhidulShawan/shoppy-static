<?php
session_start();
require "./db/connect.php";
$db = new Database();
$connection = $db->getConnection();

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//for sign up
if (isset($_POST['registration'])) {

    //this variable for signUp form input
    $emailErr = $passErr = $confirmPassErr = "";
    $email = $pass = $confirmPass = "";
    $isError = array();

    //form validation for sign up fields
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
        header('location: successMessage.php');
    }

}
//for sign in
if (isset($_POST['signIn'])) {

    //this variable for sign in form input
    $signInEmailErr = $signInPassErr = "";
    $signInEmail = $signInPass = "";
    $isSignInErr = array();

    //form validation for sign in fields
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    check email input
        if (empty($_POST["signInEmail"])) {
            $signInEmailErr = "Email is required";
            array_push($isSignInErr, true);
        } else {
            $signInEmail = check_input($_POST["signInEmail"]);
            if (!filter_var($signInEmail, FILTER_VALIDATE_EMAIL)) {
                $signInEmailErr = "Invalid email format";
                array_push($isSignInErr, true);
            }
        }
//    check password input

        if (empty($_POST["signInPassword"])) {
            $signInPassErr = "Password is required";
            array_push($isSignInErr, true);
        } else {
            $signInPass = check_input($_POST["signInPassword"]);
        }
    }

//    make encrypted password
    $signInPass = md5($signInPass);

    if (count($isSignInErr) == 0) {
        $get_user_sql = "SELECT * FROM shoppy.users WHERE email='$signInEmail' AND password='$signInPass'";
        $stmt = $connection->prepare($get_user_sql);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if ($signInPass == $user['password']) {
                $stmt->close();
                $_SESSION["uID"] = $user['id'];
                $_SESSION['uEmail'] = $user['email'];
                header('location: index.php');
                exit(0);
            } else {
                $signInPassErr = "Wrong Password";
                array_push($isSignInErr, true);
            }
        } else {
            $signInEmailErr = "Something wrong! Please try again.";
            array_push($isSignInErr, true);
        }
    }
}
