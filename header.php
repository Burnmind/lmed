<?
/** @var string $pageType */
?>
<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="public/dist/css/styles.css" rel="stylesheet" crossorigin="anonymous">
    <link href="node_modules/swiper/swiper-bundle.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <title>Лмед</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="top-line d-flex justify-content-between flex-wrap flex-lg-nowrap justify-content-lg-start
            align-items-center">
                <a href="/" class="logo-wrapper d-none d-lg-flex align-items-center">
                    <img src="public/img/logo.png" alt="Лмед">
                    <span>Красивая улыбка - это простой способ быть лучше</span>
                </a>
                <div class="address-wrapper d-none d-lg-block">
                    <div class="address d-flex align-items-center">
                        <i class="fa fa-map-marker" aria-hidden="true" ></i>
                        <span>г.Москва, ул.Зюзинская, дом 6</span>
                    </div>
                    <div class="metro-list-wrapper d-flex">
                        <img src="public/img/metro.png" class="icon-metro" alt="">
                        <div class="metro-list d-flex flex-column align-items-center">
                            <div>Новые Черемушки</div>
                            <div>Профсоюзная</div>
                            <div>Севастопольская</div>
                        </div>
                    </div>
                </div>
                <div class="social-links-wrapper d-flex">
                    <a href="javascript:void(0)">
                        <img src="public/img/vb.png" alt="">
                    </a>
                    <a href="javascript:void(0)">
                        <img src="public/img/tg.png" alt="">
                    </a>
                    <a href="javascript:void(0)">
                        <img src="public/img/wa.png" alt="">
                    </a>
                </div>
                <div class="contact-block d-none d-lg-block">
                    <div class="phone">
                        <a href="tel:+74959688011">
                            <i class="fa fa-phone" aria-hidden="true" ></i>
                            <span>+7 (495) 968-80-11</span>
                        </a>
                    </div>
                    <a href="javascript:void(0)" type="button"
                       data-bs-toggle="modal" data-bs-target="#recordFormModal"
                       class="btn button-primary-violet">Оставить заявку</a>
                </div>
                <div class="phone order-1 d-block d-lg-none">
                    <a href="tel:+74959688011">
                        +7 (495) 968-80-11
                    </a>
                </div>
                <a href="javascript:void(0)" type="button"
                   data-bs-toggle="modal" data-bs-target="#recordFormModal"
                   class="btn button-primary-white d-block d-lg-none">Оставить заявку</a>
            </div>
        </div>
        <div class="menu-line">
            <nav class="container navbar navbar-expand-lg">
                <a href="/" class="logo-wrapper d-flex d-lg-none align-items-center">
                    <img src="public/img/logo.png" alt="Лмед">
                    <span>Красивая улыбка - это простой способ быть лучше</span>
                </a>
                <div class="collapse navbar-collapse order-1" id="menuContent">
                    <ul class="navbar-nav mr-auto d-flex justify-content-between">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">О клинике</a>
                        </li>
                        <li class="nav-item navbar-expand-lg">
                            <a href="javascript:void(0)"
                               class="nav-link navbar-toggler"
                               data-bs-toggle="collapse"
                               data-bs-target="#servicesMenu"
                               aria-controls="servicesMenu"
                               aria-expanded="false">Услуги стоматологии</a>
                            <a href="javascript:void(0)"
                               class="nav-link d-none d-lg-inline-block">Услуги стоматологии</a>
                            <div class="collapse" id="servicesMenu">
                                <div class="sub-menu-wrapper">
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="javascript:void(0)" class="sub-menu-link">
                                                <div class="separator"></div>
                                                <span>Хирургическая стоматология</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="javascript:void(0)"
                                               data-bs-toggle="collapse"
                                               data-bs-target="#teethMedicine"
                                               aria-controls="teethMedicine"
                                               aria-expanded="false"
                                               class="sub-menu-link">
                                                <div class="separator"></div>
                                                <span>Лечение зубов</span>
                                            </a>
                                            <div class="collapse" id="teethMedicine">
                                                <ul>
                                                    <li class="sub-menu-item">
                                                        <a href="javascript:void(0)" class="sub-menu-link">
                                                            <div class="separator"></div>
                                                            <span>Хирургическая стоматология</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-menu-item">
                                                        <a href="javascript:void(0)" class="sub-menu-link">
                                                            <div class="separator"></div>
                                                            <span>Лечение зубов</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-menu-item">
                                                        <a href="javascript:void(0)" class="sub-menu-link">
                                                            <div class="separator"></div>
                                                            <span>Детская стоматология</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-menu-item">
                                                        <a href="javascript:void(0)" class="sub-menu-link">
                                                            <div class="separator"></div>
                                                            <span>Отбеливание зубов</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="javascript:void(0)" class="sub-menu-link">
                                                <div class="separator"></div>
                                                <span>Детская стоматология</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="javascript:void(0)" class="sub-menu-link">
                                                <div class="separator"></div>
                                                <span>Отбеливание зубов</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">Цены</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">Акции</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menuContent"
                        aria-controls="menuContent"
                        aria-expanded="false"
                >
                    <img src="public/img/icons/icon-burger.png" class="icon-burger" alt="">
                </button>
            </nav>
        </div>
    </header>
    <main class="<?= $pageType ?>">
        <? require './partials/breadcrumbs.php'; ?>


