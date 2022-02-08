<!DOCTYPE html>
<html lang="ru">

<head>

    <?php

   if ($page != 'form') include "elements/head.php"

    ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css">
    <link rel="stylesheet" href="/assets/libs/aos/aos.css">
    <link rel="stylesheet" href="/assets/libs/bootstrap-grid/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/libs/animate_css/animate.css">
    <link rel="stylesheet" href="/assets/styles/navfooter.css">


    <title><?php echo $title ?></title>
</head>

<body class="dark">

    <header>
        <nav class="navigation" data-aos="fade-down" data-aos-delay="500">
            <div class="extensions">
                <div class="lang">
                    <a href="#!" class="active">RU</a>
                    <span>|</span>
                    <a href="/uz/" class="unactive">UZ</a>
                </div>
                <div class="theme"> </div>
            </div>
            <a href="/" class="logo">
                <!-- <img src="/assets/icons/logo.png" alt=""> -->
                <img src="/assets/img/logo-christmas.png" alt="">
            </a>
            <div class="mobile-btns">
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>     
            <div class="socials" data-aos="fade-down">
                <div class="partner-btn">Оставить заявку</div>
                <!-- <a href="https://t.me/marketingconcept_uz"><img src="/assets/icons/telegram-f.svg" alt=""></a>
                <a href="https://www.instagram.com/marketingconcept.uz/"><img src="/assets/icons/instagram-f.svg" alt=""></a>
                <a href="https://www.facebook.com/MarketingConcept.uz"><img src="/assets/icons/facebook-f.svg" alt=""></a> -->
            </div>
            <ul class="links">
                <div class="inner">
                    <div><a href="#!"><img src="/assets/icons/logo.png" alt=""></a></div>
                    <div><a href="#home">Главная</a></div>
                    <div><a href="#services">Услуги</a></div>
                    <div><a href="#team">Команда</a></div>
                    <div><a href="#feedbacks">Отзывы</a></div>
                    <div><a href="#partners">Партнёры</a></div>
                    <div><a href="#contacts">Контакты</a></div>
                    <div class="inner-socials">
                        <a href="https://t.me/marketingconcept_uz"><img src="/assets/icons/telegram-f.svg" alt=""></a>
                        <a href="https://www.instagram.com/marketingconcept.uz/"><img src="/assets/icons/instagram-f.svg" alt=""></a>
                        <a href="https://www.facebook.com/MarketingConcept.uz"><img src="/assets/icons/facebook-f.svg" alt=""></a>
                    </div>
                </div>
            </ul>
        </nav>
        <a href="tel:+998712077769" class="phone-givo"></a>
    </header>