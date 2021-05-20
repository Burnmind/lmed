        </main>
        <footer class="footer-line">
            <div class="container d-flex justify-content-between">
                <a href="/" class="logo-wrapper d-flex align-items-center">
                    <img src="public/img/logo-white.png" alt="Лмед">
                    <span class="d-none d-md-inline">Красивая улыбка - это простой способ быть лучше</span>
                </a>
                <div class="menu-wrapper d-flex justify-content-end align-items-center flex-wrap">
                    <a href="javascript:void(0)" class="nav-link">Акции</a>
                    <a href="javascript:void(0)" class="nav-link">Цены</a>
                    <a href="javascript:void(0)" class="nav-link">Услуги стоматологии</a>
                    <a href="javascript:void(0)" class="nav-link">О клинике</a>
                    <a href="javascript:void(0)" class="nav-link">Отзывы</a>
                    <a href="javascript:void(0)" class="nav-link">Контакты</a>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="recordFormModal" tabindex="-1" aria-labelledby="recordFormModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="popup-content">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    <? require 'partials/record-form.php' ?>
                </div>
            </div>
        </div>
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="popup-content">
                    <div class="popup-success">
                        <div class="image-wrapper">
                            <img src="./public/img/success.png" alt="success">
                        </div>
                        <div class="success-title">
                            Вы записаны<br>
                            скоро мы перезвоним
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="public/dist/js/main.js" crossorigin="anonymous" type="module"></script>
    </body>
</html>
