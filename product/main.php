<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>TechShop</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="product.css" rel="stylesheet">
</head>
<body>

<header class="site-header sticky-top py-2">
    <?php echo '<nav class="container d-flex flex-column flex-md-row justify-content-between" xmlns="http://www.w3.org/1999/html">
        <a class="py-lg-3 d-none d-md-block" href="../product/main.php">Home</a>
        <a class="py-lg-3 d-none d-md-block" href="../devises/index.php">Products</a>
        <a class="py-lg-3  d-md-block" href="../contacts/index.php">Contacts</a>

    </nav>'; ?>
</header>

<main>
    <?php $main = '
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">TechShop</h1>
            <p class="lead fw-normal" style="margin-left: 3%">Низкие цены | Высокое качество</p>
            <a class="btn btn-outline-secondary" href="../devises/index.php">К товарам</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="padding-bottom: 10%">
            <div class="my-3 p-3">
                <h2>Самые крутые устройства для вас</h2>
            </div>
        <img src="../images/phone_main1.png">
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"  style="padding-bottom: 10%">
            <div class="my-3 p-3">
                <h2>Гарантированный сервис и качество</h2>
            </div>
        <img src="../images/phone_main2.png">
        </div>
        
    </div>
    ';
    echo $main ?>
</main>

<footer class="container py-md-3" >
    <hr>
    <div class="col-6 col-lg-8" style="padding-left: 40%">
        <h5>TechShop</h5>
        <ul class="list-unstyled text-small">
            <li><a style="color: #1a1e21" href="#">Старая Басманная, 22</a></li>
            <li><a style="color: #1a1e21" href="#">Телефон: +7 (495) 223-05-23</a></li>
            <li><a style="color: #1a1e21" href="#">Почта: tech@shop.ru</a></li>
        </ul>
    </div>
    <hr>
</footer>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
