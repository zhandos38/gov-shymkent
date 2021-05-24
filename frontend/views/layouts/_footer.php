<?php
use yii\helpers\Url;
?>
<footer>
    <section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <div class="logo">
                            <a href="index.html">
                                <img src="/img/logo.png" alt="img" />
                            </a>
                            <p>ГКП НА ПХВ "ГОРОДСКОЙ ОНКОЛОГИЧЕСКИЙ ЦЕНТР"</p>
                        </div>
                        <address>
                            <ul class="text-foot">
                                <li><i class="icofont-google-map"></i> г.Шымкент, Байтурсынова, 85a</li>
                                <li><i class="icofont-phone"></i><a href="tel:+12396661985">Регистратура +7(7252) 38-00-70</a></li>
                                <li><i class="icofont-phone"></i><a href="tel:+12396661985">Телефон доверия +7(7252) 38-00-72</a></li>
                                <li><i class="icofont-phone"></i><a href="tel:+12396661985">Коллцентра +7(7252) 38-33-83</a></li>
                            </ul>
                        </address>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h1>Ссылки</h1>
                        <ul class="text-foot">
                            <li><a href="/">Главная</a></li>
                            <li><a href="<?= Url::to(['site/about']) ?>">О центре</a></li>
                            <li><a href="<?= Url::to(['site/services']) ?>">Услуги</a></li>
                            <li><a href="<?= Url::to(['site/news']) ?>">Новости</a></li>
                            <li><a href="<?= Url::to(['site/contact']) ?>">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="footer-box another">
                        <h1>Полезные ссылки</h1>
                        <ul class="text-foot">
                            <li><a href="#">Министерство здравоохранение</a></li>
                            <li><a href="#">Наш блог</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="footer-box another">
                        <h1>Социальные сети</h1>
                        <p style="padding:0">Подписовайтесь на наши соц. сети</p>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/%D0%93%D0%9E%D0%A6-%D0%A8%D1%8B%D0%BC%D0%BA%D0%B5%D0%BD%D1%82-360846874724636/"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/gocshymkent/?hl=en"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom">
        <div class="container">
            <p>2020 © Все права защищены <a href="http://itbgroup.kz">itbgroup.kz</a></p>
        </div>
    </div>
    <a href="#" class="go-top"><i class="fas fa-arrow-up"></i></a>
</footer>

<div id="back"><i class="ion-chevron-up-sharp"></i></div>

<!-- Modal -->
<div class="modal fade" id="modal-video" data-open-onload="false" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-close-sharp"></i></button>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="video-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>