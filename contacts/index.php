<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>TechShop</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title" id="frm">Напишите нам :)</h1>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Здесь можно ознакомиться с нашими контактами и физическим адресом магазина.
                 Если у Вас возникли вопросы, Вы можете задать их по телефонам или электронной почте.
                 Мы будем рады ответить на все Ваши вопросы.</p>

                <div class="find-widget">
                 Компания:  <a>TechShop</a>
                </div>
                <div class="find-widget">
                 Адрес: <a>г.Москва, ул. Старая Басманная, 22</a>
                </div>
                <div class="find-widget">
                  Phone: <a>+79457787115</a>
                </div>
                <div class="find-widget">
                  Email:  <a>tech@shop.ru</a>
                </div>

              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating" id="frm">
                        <input placeholder="ФИО" class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating" id="frm">
                        <input placeholder="Email" class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating" id="frm">
                        <input placeholder="Тема" class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating" id="frm">
                          <textarea placeholder="Сообщение" class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5" id="frm">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline" style="border-color: black"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
    </div>
    ';
    echo $main ?>
</main>

<footer class="container py-md-3">
    <hr>
    <div class="col-6 col-lg-7" style="padding-left: 45%">
        <h5>TechShop</h5>
        <ul class="list-unstyled text-small">
            <li><a style="color: #1a1e21" href="#"> </a></li>
            <li><a style="color: #1a1e21" href="#"> </a></li>
            <li><a style="color: #1a1e21" href="#"> </a></li>
        </ul>
    </div>
    <hr>
</footer>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
