<?php
use yii\helpers\Url;
?>
<footer class="footer-2">           <!-- Footer Style 2 -->
    <div class="footer-pri">            <!-- Primary Footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget widget-about">           <!-- Widget -->
                        <a href="index-hospital-classic.html">
                            <img src="/images/logo-light.svg" class="logo-footer" alt="">
                        </a>
                        <p class="mt-20 footer-text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <hr class="mt-30 mb-30 d-lg-none" />
                    <div class="widget widget-links">           <!-- Widget -->
                        <h5 class="heading font-bold">Полезные ссылки</h5>
                        <ul>
                            <li><a href="book-appointment-form.html">Book Appoitment</a></li>
                            <li><a href="departments-style-1.html">View Departments</a></li>
                            <li><a href="contact-1.html">Our Locations</a></li>
                            <li><a href="doctors-style-2.html">Doctors On Panel</a></li>
                            <li><a href="why-us-1.html">Facilities Available</a></li>
                            <li><a href="about-us-1.html">About Hospital</a></li>
                            <li><a href="policies.html">Hospital Rules</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget widget-about">
                        <h5 class="heading font-bold"><?= Yii::t('site', 'Контакты') ?></h5>
                        <ul class="contact footer-text">
                            <li>
                                <i class="ion-location-outline"></i>
                                <div>
                                    <b>г.Шымкент</b>, Байтурсынова, 85a
                                </div>
                            </li>
                            <li><i class="ion-call-outline"></i> +7(7252)36-11-13</li>
                            <li><i class="ion-mail-outline"></i> info@goc-shymkent.kz</li>
                        </ul>
                        <hr class="mt-30 mb-30" />
                        <h5 class="heading font-bold mb-20">Социальные сети</h5>
                        <ul class="social social-round social-2x">
                            <li><a class="facebook" href="#"><i class="ion-logo-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-logo-twitter"></i></a></li>
                            <li><a class="google" href="#"><i class="ion-logo-google"></i></a></li>
                            <li><a class="youtube" href="#"><i class="ion-logo-youtube"></i></a></li>
                            <li><a class="whatsapp" href="#"><i class="ion-logo-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-sec">            <!-- Secondary Footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-10 mb-10">
                    <p class="mb-0 footer-text">&copy; 2021 Все права защищены.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
