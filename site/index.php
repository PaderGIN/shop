<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>PetShop(Boys)</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&display=swap"
          rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>
    <link href="assets/css/swiper.min.css" rel="stylesheet"/>
    <link href="assets/css/fancybox.min.css" rel="stylesheet"/>
    <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <div class="dog-head"></div>
            <div class="dog-body"></div>
        </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area transparent">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-start">
                            <div class="header-logo-area">
                                <a href="index.html">
                                         alt="Logo"/>
                                </a>
                            </div>
                        </div>
                        <div class="header-align-center">
                            <div class="header-navigation-area position-relative">
                                <ul class="main-menu nav">
                                    <li class="has-submenu"><a href="#/"><span>Главная</span></a>
                                    </li>
                                    <li><a href="contact.php"><span>Контакты</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-end">
                            <div class="header-action-area">
                                <div class="shopping-search">
                                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                        <i class="pe-7s-search icon"></i></button>
                                </div>
                                <div class="shopping-account">
                                    <a class="shopping-account-btn" href="account-login.php">
                                        <i class="pe-7s-users icon"></i>
                                    </a>
                                </div>
                                <button class="btn-menu" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                    <i class="pe-7s-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        <section class="home-slider-area">
            <div class="swiper home-slider-container default-slider-container">
                <div class="swiper-wrapper home-slider-wrapper slider-default">
                    <div class="swiper-slide">
                        <div class="slider-content-area" data-bg-img="assets/img/slider/slider-bg.webp">
                            <div class="container">
                                <div class="slider-container">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="slider-content">
                                                <div class="content">
                                                    <div class="sub-title-box">
                                                        <h5 class="sub-title">Скидки до 90%</h5>
                                                    </div>
                                                    <div class="title-box">
                                                        <h2 class="title">Крутой продукт для вашего питомца!</h2>
                                                    </div>
                                                    <div class="btn-box">
                                                        <a class="btn-theme text-dark" href="shop.html">Купить!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="slider-thumb mousemove">
                                                <div class="thumb">
                                                    <img src="/assets/img/photos/img.png" width="70%" height="70%" alt="Image-HasTech">
                                                    <div class="shape-one"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content-two-area" data-bg-img="assets/img/slider/slider-02.webp">
                            <div class="container">
                                <div class="slider-container">
                                    <div class="row justify-content-sm-end justify-content-center align-items-center">
                                        <div class="col-sm-8 col-md-6">
                                            <div class="slider-content">
                                                <div class="content">
                                                    <div class="sub-title-box">
                                                        <h5 class="sub-title">100% Genue Products</h5>
                                                    </div>
                                                    <div class="title-box">
                                                        <h2 class="title">This Food Best Your Pet</h2>
                                                    </div>
                                                    <div class="desc-box">
                                                        <p class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit, seddo do eiusmod tempor incidid ut
                                                            labore.</p>
                                                    </div>
                                                    <div class="btn-box">
                                                        <a class="btn-theme text-dark" href="shop.html">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home-overlay"></div>
                        </div>
                    </div>
                </div>

                <!--== Add Swiper Arrows ==-->
                <div class="swiper-btn-wrap">
                    <div class="swiper-btn-prev">
                        <i class="pe-7s-angle-left"></i>
                    </div>
                    <div class="swiper-btn-next">
                        <i class="pe-7s-angle-right"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

    </main>

    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-area">
        <!--== Start Footer Main ==-->
        <div class="footer-main">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-item widget-about">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-item">
                            <h4 class="widget-title">Котнакты</h4>

                            <div id="widgetId-3" class="collapse widget-collapse-body">
                                <div class="collapse-body">
                                    <div class="widget-contact-info">
                                        <p class="contact-info-desc">Если у Вас остались вопросы: <a
                                                href="mailto://demo@example.com">gleb@padergin.ru</a></p>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="pe-7s-map-marker"></i>
                                            </div>
                                            <div class="info">
                                                <p><span>Адрес</span> <br>Большая семеновская 38</p>
                                            </div>
                                        </div>
                                        <div class="contact-item phone-info">
                                            <div class="icon">
                                                <i class="pe-7s-phone"></i>
                                            </div>
                                            <div class="info">
                                                <p><span>Телефон</span> <br><a href="tel://0123456789">+7 959 6642 732</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Footer Main ==-->

        <!--== Start Footer Bottom ==-->
        <div class="footer-bottom">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Footer Bottom ==-->
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

    <!--== Start Product Quick Wishlist Modal ==-->
    <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-action-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="pe-7s-close"></i>
                        </button>
                        <div class="modal-action-messages">
                            <i class="pe-7s-check"></i> Added to wishlist successfully!
                        </div>
                        <div class="modal-action-product">
                            <div class="thumb">
                                <img src="assets/img/shop/modal1.webp" alt="Organic Food Juice" width="466"
                                     height="320">
                            </div>
                            <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Wishlist Modal ==-->

    <!--== Start Product Quick Add Cart Modal ==-->
    <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-action-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="pe-7s-close"></i>
                        </button>
                        <div class="modal-action-messages">
                            <i class="pe-7s-check"></i> Added to cart successfully!
                        </div>
                        <div class="modal-action-product">
                            <div class="thumb">
                                <img src="assets/img/shop/modal1.webp" alt="Organic Food Juice" width="466"
                                     height="320">
                            </div>
                            <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start Product Quick View Modal ==-->
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-quick-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span class="pe-7s-close"></span>
                        </button>
                        <div class="container pt--0 pb--0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-single-thumb">
                                        <img src="assets/img/shop/quick-view1.webp" width="544" height="560"
                                             alt="Image-HasTech">
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-lg-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-single-info">
                                        <h3 class="main-title">Joust Duffle Bag</h3>
                                        <div class="prices">
                                            <span class="price">$20.19</span>
                                        </div>
                                        <div class="rating-box-wrap">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-status">
                                                <a href="javascript:void(0)">(5 Customer Review)</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor
                                            incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nol
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute irure dolor in reprehenderit in voluptate</p>
                                        <div class="product-single-meta">
                                            <ul>
                                                <li><span>SKU:</span> Ch-256xl</li>
                                                <li><span>Categories:</span>
                                                    <a href="shop.html">Pet Food. eCommerce</a>
                                                </li>
                                                <li><span>Tags:</span>
                                                    <a href="shop.html">Petfood. Pet</a>,
                                                    <a href="shop.html">Animal.</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-quick-action">
                                            <div class="qty-wrap">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="01">
                                                </div>
                                            </div>
                                            <button type="button" class="btn-product-cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                Add To Cart
                                            </button>
                                            <button type="button" class="btn-product-wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                <i class="pe-7s-like"></i>
                                            </button>
                                            <button type="button" class="btn-product-quick-view" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                <i class="pe-7s-look"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick View Modal ==-->

    <!--== Start Aside Cart ==-->
    <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart"
           aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
            <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i
                    class="fa fa-chevron-right"></i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="aside-cart-product-list">
                <li class="aside-product-list-item">
                    <a href="#/" class="remove">×</a>
                    <a href="single-product.html">
                        <img src="assets/img/shop/product-mini/1.webp" width="90" height="110" alt="Image-HasTech">
                        <span class="product-title">Leather Mens Slipper</span>
                    </a>
                    <span class="product-price">1 × £69.99</span>
                </li>
                <li class="aside-product-list-item">
                    <a href="#/" class="remove">×</a>
                    <a href="single-product.html">
                        <img src="assets/img/shop/product-mini/2.webp" width="90" height="110" alt="Image-HasTech">
                        <span class="product-title">Quickiin Mens shoes</span>
                    </a>
                    <span class="product-price">1 × £20.00</span>
                </li>
            </ul>
            <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
            <a class="btn-total" href="shop-cart.html">View cart</a>
            <a class="btn-total" href="shop-checkout.html">Checkout</a>
            <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp"
                                                                            width="133" height="26" alt="Has-image"></a>
        </div>
    </aside>
    <!--== End Aside Cart ==-->

    <!--== Start Aside Search Form ==-->
    <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
           aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="pe-7s-close"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="container pt--0 pb--0">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form action="#" method="post">
                        <div class="search-form position-relative">
                            <label for="search-input" class="visually-hidden">Search</label>
                            <input id="search-input" type="search" class="form-control"
                                   placeholder="Search entire store…">
                            <button class="search-button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Aside Search Form ==-->

    <!--== Start Aside Menu ==-->
    <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
           aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
            <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
                    class="fa fa-chevron-left"></i></button>
        </div>
        <div class="offcanvas-body">
            <nav id="offcanvasNav" class="offcanvas-menu-nav">
                <ul>
                    <li class="offcanvas-nav-parent">
                        <a class="offcanvas-nav-item" href="javascript:void(0)">Home</a>
                    </li>
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </aside>
</div>

<script src="assets/js/modernizr.js"></script>
<script src="assets/js/jquery-main.js"></script>
<script src="assets/js/jquery-migrate.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/ion.rangeSlider.min.js"></script>

<script src="assets/js/custom.js"></script>

</body>

</html>