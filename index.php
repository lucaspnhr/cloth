<?php
    if(isset($_COOKIE['isLogged']) && !empty($_COOKIE['isLogged'])){
        $isLogged = $_COOKIE['isLogged'];
    }else{
        $isLogged = false;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/main.css">
    <title>CLOTH</title>
</head>
<body>
    <header>
        <div class="container__logo">
            <a href="index.php">CLOTH</a>
        </div>
        <div class="nav__bar">
            <a class="nav__link" href="#">Women</a>
            <a class="nav__link" href="#">Men</a>
            <a class="nav__link" href="#">Kids</a>
        </div>
        <?php if(!$isLogged){?>
            <div class="container__sign-in">
                <a class="btn btn__link sign-in" href="signin.php">SIGN IN</a>
            </div>
        <?php } else {?>
            <div class="container__my-account">
                <img src="site_images/icons/Avatar.png" alt="user-icon">
                <span class="my-account">My Account</span>
                <div class="dropdown-menu">
                    <a href="" class="dropdown-item">Previous Orders</a>
                    <a href="logout.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        <?php } ?>
        <div class="container__cart">
            <img src="site_images/icons/carrin.png" alt="">
        </div>
    </header>

    <main>
        <p id="whats-new">What's new ?</p>
    </main>

    <footer>
        <ul class="footer__list">
            <li class="footer__item"><a href="">Terms and Conditions</a></li>
            <li class="footer__item"><a href="">Support Us</a></li>
            <li class="footer__item"><a href="">SAC</a></li>
            <li class="footer__item">
                <p>Quality and Security</p>
                <ul class="labels__list">
                    <li class="label__item"><img src="site_images/footer_label_top3_ibest.png" alt="" class="label__img"></li>
                    <li class="label__item"><img src="site_images/label-blindado.png" alt="" class="label__img" id="site_blindado"></li>
                    <li class="label__item"><img src="site_images/label-reclameaqui.png" alt="" class="label__img"></li>
                    <li class="label__item"><img src="site_images/label_ebit.png" alt="" class="label__img"></li>
                </ul>
            </li>
        </ul>
        <p>Developed By ManoJesus.Inc</p>
    </footer>

</body>
</html>