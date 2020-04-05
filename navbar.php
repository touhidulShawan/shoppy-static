<nav class="nav">
    <div class="container nav__container">
        <a href="index.php" class="logo">
            <span class="logo__text">shoppy</span>
        </a>
        <ul class="nav__ul">
            <li class="nav__items">
                <a href="index.php"
                   class="nav__link <?php echo($_SERVER['PHP_SELF'] == "/index.php" ? "active__link" : " "); ?>">home</a>
            </li>
            <li class="nav__items">
                <a href="signInUp.php"
                   class="nav__link <?php echo($_SERVER['PHP_SELF'] == "/signInUp.php" ? "active__link" : " "); ?>">Login</a>
            </li>
            <li class="cart">
                <a href="cart.php"
                   class="nav__link <?php echo($_SERVER['PHP_SELF'] == "/cart.php" ? "active__link" : " "); ?>">
              <span class="cart__icon">
                <img src="img/icons/shopping_cart.svg" alt="cart icon"/>
              </span>
                </a>
            </li>
        </ul>
    </div>
</nav>