<?php include "./signupHandle.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
<!-- navbar start -->
<?php require "navbar.php" ?>
<!-- navbar end  -->
<!-- page main content start here - -->
<div class="signInUp__container ">
    <div class="login__wrapper">
        <!-- signIn  start -->
        <div class="signIn__avatar">
            <object
                    data="../img/icons/female_avatar.svg"
                    type="image/svg+xml"
                    class="avatar-icon"
            ></object>
        </div>
        <div class="signIn">
            <form action="">
                <div class="form__field">
                    <input
                            type="email"
                            name="signInEmail"
                            id="signInEmail"
                            placeholder="Enter your email"
                            required
                    />
                </div>
                <div class="form__field">
                    <input
                            type="password"
                            name="signInPassword"
                            id="signInPassword"
                            placeholder="Enter your password"
                            required
                    />
                </div>
                <div class="btn__container">
                    <button type="submit" class="btn btn--submit">Sign In</button>
                </div>
            </form>
        </div>
        <!-- signIn  end  -->
    </div>
    <!-- signup start  -->
    <div class="signUp_wrapper">
        <h2 class="signUp_header">Create an Account</h2>
        <div class="signUp_input-container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="signUp_form">
                <div class="form__field">
                    <div class="error-input"><?php echo $emailErr; ?></div>
                    <input
                            type="email"
                            name="signUpEmail"
                            id="signUpEmail"
                            placeholder="Enter your email"
                            value="<?php echo $email; ?>"
                    />

                </div>
                <div class="form__field">
                    <div class="error-input"><?php echo $passErr; ?></div>
                    <input
                            type="password"
                            name="signUpPassword"
                            id="signUpPassword"
                            placeholder="Enter password"
                    />
                </div>

                <div class="form__field">
                    <div class="error-input"><?php echo $confirmPassErr; ?></div>
                    <input
                            type="password"
                            name="confirmSignUpPassword"
                            placeholder="Confirm your password"
                    />
                </div>

                <div class="btn__container">
                    <button type="submit" class="btn btn--submit signUp--btn" name="registration">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
