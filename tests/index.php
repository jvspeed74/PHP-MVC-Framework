<?php
/**
 * Author : Abrar Sabel
 * Date : 4/16/24
 * File : ?{FILE_NAME}
 * Description :
 */
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>FitFlex</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-1 col-lg-7">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/site-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li><a href="#">Shop</a>
                            <ul class="dropdown">
                                <li><a href="./shop-cart.html">Apparel</a></li>
                                <li><a href="./checkout.html">Gear</a></li>
                                <li><a href="./blog-details.html">Supplements</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Classes</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <a href="#">Login</a>
                        <a href="#">Register</a>
                    </div>
                    <ul class="header__right__widget">
                        <li><img src="img/search-icon.png" alt="Search" style="width: 20px; height: auto;"></li>
                        <li><a href="#"><img src="img/favorites-icon.png" alt="Favorites" style="width: 20px; height: auto;"></a></li>
                        <li><a href="#"><img src="img/cart-icon.png" alt="Cart" style="width: 20px; height: auto;"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
<!-- Header Section End -->
<div class="trend">
    <img src="img/supp-image.jpg" alt="Big Picture" class="hero-image">
    <div class="hero-content">
        <a href="#" class="site-btn">Shop Supplements</a>
    </div>
</div>
<?php
include ('includes/footer.php');