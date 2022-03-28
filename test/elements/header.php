<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/libs/bootstrap-grid/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/libs/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/styles/navfooter.css">


    <title><?php echo $title ?></title>
</head>

<body>

    <header>
        <nav class="navigation <?php if ($page !== "index") {echo "nav-change";} ?>">
            <div class="wrapper">
                <a href="/" class="logo">
                    <img src="/assets/img/logo-up.png" alt="" class="logo-up">
                    <img src="/assets/img/logo-down.png" alt="" class="logo-down">
                </a>
                <ul class="nav-links">
                    <li><a href="/about.php">О нас</a></li>
                    <li><a href="<?php if ($page !== "index") {echo "/";} ?>#healing" <?php if ($page == "index") {echo "data-scroll";} ?> >Виды лечения</a></li>
                    <li><a href="<?php if ($page !== "index") {echo "/";} ?>#rooms" <?php if ($page == "index") {echo "data-scroll";} ?> >Номерной фонд</a></li>
                    <li><a href="<?php if ($page !== "index") {echo "/";} ?>#relax"  <?php if ($page == "index") {echo "data-scroll";} ?> >Отдых и развлечения</a></li>
                    <li><a href="<?php if ($page !== "index") {echo "/";} ?>#contacts" <?php if ($page == "index") {echo "data-scroll";} ?> >Контакты</a></li>
                </ul>
                <a href="<?php if ($page !== "index") {echo "/";} ?>#booking" class="btn-default order" <?php if ($page == "index") {echo "data-scroll";} ?> >Забронировать</a>
                <div class="lang-box">
                    <a href="#!" class="ru active"></a>
                    <a href="#!" class="uz"></a>
                    <a href="#!" class="eng"></a>
                    <img src="/assets/icons/down-arrow.svg" alt="">
                </div>
                <div class="mobile-btns">
                    <button class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
    </header>