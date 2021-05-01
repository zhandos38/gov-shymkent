<?php
use yii\helpers\Url;

?>
<header class="header-1">           <!-- Header -->
    <div class="topbar">            <!-- Topbar -->
        <div class="container-lg">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="topbar-items">
                        <ul class="topbar-social d-none d-lg-inline-flex">
                            <li><a href="#"><i class="ion-logo-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-logo-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-logo-youtube"></i></a></li>
                            <li><a href="#"><i class="ion-logo-vimeo"></i></a></li>
                        </ul>
                        <ul class="widgets">
                            <li class="email-widget d-none d-lg-inline-flex"><i class="ion-mail-outline"></i> info@goc-shymkent.kz</li>
                            <li class="emergency-widget">
                                <h4 class="emergency">            <!-- Emergency Number -->
                                    <span class="sub-text">Телефон доверия</span>
                                    <span class="number">+7(7252)36-11-13</span><br/>
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-nav">         <!-- Navigation Bar -->
        <div class="container">
            <a class="navbar-brand" href="index-hospital-classic.html">
                <div style="display:flex;justify-content: center;align-items: center">
                    <img src="/images/logo.png" style="width: 66px;" alt="logo" class="logo">         <!-- Replace with your Logo -->
                    <div style="padding-left: 12px; padding-bottom: 5px; font-size: 16px; color: #303b41">
                        <div>ГКП НА ПХВ</div>
                        <div><b>Городской онкологический центр</b></div>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-navigation">
                    <span class="navbar-toggler-icon">          <!-- Mobile Menu Toggle -->
                        <span class="one"></span>
                        <span class="two"></span>
                        <span class="three"></span>
                    </span>
            </button>

            <div class="navbar-collapse collapse" id="main-navigation">         <!-- Main Menu -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= Url::to(['/']) ?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['site/about']) ?>">О центре</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['site/service']) ?>">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['post/index']) ?>">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['site/contact']) ?>">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
