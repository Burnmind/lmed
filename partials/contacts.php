<?
/** @var string $pageType */
?>
<section class="contacts-block">
    <div class="container">
        <div class="contacts-and-map">
            <div class="title">
                КОНТАКТЫ И КАРТА ПРОЕЗДА
            </div>
            <div class="contacts-wrapper">
                <div class="contacts">
                    <div class="address-wrapper">
                        <div class="address d-flex align-items-center">
                            <i class="fa fa-map-marker fa-2x" aria-hidden="true" ></i>
                            <span>г.Москва, ул.Зюзинская, дом 6</span>
                        </div>
                        <div class="metro-list-wrapper d-flex align-items-center">
                            <img src="public/img/icons/icon-metro-purple.png" class="icon-metro" alt="">
                            <div class="metro-list d-flex flex-column">
                                <div>Новые Черемушки</div>
                                <div>Профсоюзная</div>
                                <div>Севастопольская</div>
                            </div>
                        </div>
                    </div>
                    <div class="phone">
                        <a href="tel:+74959688011">
                            <i class="fa fa-phone fa-2x" aria-hidden="true" ></i> +7 (495) 968-80-11
                        </a>
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
                    <? if ($pageType != 'contacts-page'): ?>
                        <a href="javascript:void(0)" type="button"
                           data-bs-toggle="modal" data-bs-target="#recordFormModal"
                           class="btn button-primary-violet">Записаться на прием</a>
                    <? endif ?>
                </div>
                <? if ($pageType == 'contacts-page'): ?>
                    <? require 'partials/record-form.php' ?>
                <? endif ?>
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9118b506cdc686fcfb3d0847c9f2a264d819f833c37a7bec967a932589b741a0&width=100%25&height=400&lang=ru_RU&scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
</section>
