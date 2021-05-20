<?php

use common\models\Post;
use yii\helpers\Url;

$this->title = 'Главная страница';
?>
<div class="hero-active  owl-carousel">
    <div class="hero-area" style="background-image: url(/img/back1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-containt">
                        <div class="hero-text text-area">
                            <h1 class="text-white" data-animation="animated fadeInRight"><?= Yii::t('site', 'Личная забота для вашего здорового образа жизни') ?></h1>
                            <p data-animation="animated fadeInRight"></p>
                            <div class="exper-button " data-animation="animated fadeInRight">
                                <a href="#" class="team-1 btn-default"><?= Yii::t('site', 'Связаться с нами') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-area" style="background-image: url(/img/banner/slider-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-containt">
                        <div class="hero-text text-area">
                            <h1 data-animation="animated fadeInRight"><?= Yii::t('site', 'Мы делаем жизнь наших пациентов лучше') ?></h1>
                            <p data-animation="animated fadeInRight"></p>
                            <div class="exper-button " data-animation="animated fadeInRight">
                                <a href="#" class="team-1 btn-default"><?= Yii::t('site', 'Связаться с нами') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="intro-area">
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
            <div class="intro-box">
                <i class="icofont-wall-clock"></i>
                <div class="inr">
                    <h2><?= Yii::t('site', 'Всегда открыт') ?></h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
            <div class="intro-box">
                <i class="icofont-doctor"></i>
                <div class="inr">
                    <h2><?= Yii::t('site', 'Врачи-специалисты') ?></h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
            <div class="intro-box">
                <i class="icofont-ambulance"></i>
                <div class="inr">
                    <h2><?= Yii::t('site', 'Скорая помощь') ?></h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
            <div class="intro-box" style="border-right:0">
                <i class="icofont-blood-test"></i>
                <div class="inr">
                    <h2><?= Yii::t('site', 'Лабораторный тест') ?></h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="advanced-area">
    <div class="container">
        <h1><?= Yii::t('site', 'О нашем центре') ?></h1>
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12 no-padding">
                <div class="adv-img">
                    <div>
                        <img class="main" src="/img/director.jpg" alt="adv1" style="padding-bottom: 10px">
                        <div class="text-center" style="padding-bottom: 10px; background-color: white">
                            <div style="font-size: 22px;">Мауленов Жаксылык Оразбайұлы</div>
                            <div><b>Директор</b></div>
                        </div>
                    </div>
                    <img class="first" src="/img/interface/advance-1.png" alt="adv2">
                    <img class="second" src="/img/interface/advance2.png" alt="adv3">
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="adv-detail">
                    <p>ГКП на ПХВ «ГОРОДСКОЙ ОНКОЛОГИЧЕСКИЙ ЦЕНТР» является единственным специализированным онкологическим учреждением области, оснащенный необходимым оборудованием и имеющим квалифицированные кадры врачей-онкологов. </p>
                    <div class="adv-bottom">
                        <h3><?= Yii::t('site', 'Посетите нашу клинику круглосуточно') ?></h3>
                        <ul>
                            <li><b><?= Yii::t('site', 'Пн – Пт') ?> -</b> 9:00 - 18:00</li>
                            <li><b><?= Yii::t('site', 'Суббота') ?> -</b> 9:00 - 18:00</li>
                            <li><b><?= Yii::t('site', 'Воскресенье') ?> -</b> <?= Yii::t('site', 'Закрыто') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-area">
    <div class="container">
        <h1>Наши услуги</h1>
        <div class="services-box mt-3">
            <a href="<?= Url::to(['static/gynecology']) ?>" class="per-box">
                <img src="/img/services/s-12.png" alt="img">
                <h3><?= Yii::t('site', 'Гинекология') ?></h3>
            </a>
            <a href="<?= Url::to(['static/light']) ?>" class="per-box">
                <i class="far fa-bolt"></i>
                <h3><?= Yii::t('site', 'Лучевая диагностика') ?></h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-6.png" alt="img">
                <h3>Грудная хирургия</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-4.png" alt="img">
                <h3>Отделение хирургий</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-5.png" alt="img">
                <h3>Консультативно-диагностического отделения</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-3.png" alt="img">
                <h3>Отделение анестезиологии и реанимации и интенсивной терапии</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-7.png" alt="img">
                <h3>Отделение химиотерапии</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-8.png" alt="img">
                <h3>Дневной стационар</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-9.png" alt="img">
                <h3>Цито-гистологическая лаборатория</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <img src="/img/services/s-10.png" alt="img">
                <h3>Отделение гинекологии</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <i class="far fa-procedures"></i>
                <h3>Отделение химиотерапии</h3>
            </a>
            <a href="services-details.v.1.html" class="per-box">
                <i class="far fa-heartbeat"></i>
                <h3>Отделение эндоваскулярной онкологии</h3>
            </a>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<div class="doctor-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="doctor-wrap">
                    <div class="doctor-content">
                        <h3>Нужна консультация врача-эксперта? Позвоните нам</h3>
                        <span>+7(7252) 36-12-40</span>
                        <p>Наш телефон поддержки работает 24/7. Мы ждем вас </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-request">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="boxsed-shawo">
                                <div class="form-area">
                                    <h1><?= Yii::t('site', 'НАПИШИТЕ НАМ') ?></h1>
                                    <form name="frmRequest" id="frmRequest" action="https://medics.themechampion.com/html/hospital/contact_process.php" method="post" class="form_wrap">
                                        <input type="hidden" name="frmRequestAnAppoint" name="frmRequestAnAppoint" value="frmRequestAnAppoint" />
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" placeholder="Полное имя*" type="text" name="fname" id="fname">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" placeholder="Номер телефона*" type="text" name="fphone" id="fphone">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control" name="fmessage" id="fmessage" placeholder="Ваше сообщение*"></textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="contact-button">
                                                    <button type="submit" class="team-1 btn-submit"><?= Yii::t('site', 'Отправить') ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="news-area">
    <div class="container">
        <h1><?= Yii::t('site', 'Новости & Блог') ?></h1>
        <p><?= Yii::t('site', 'Последние новости нашей поликлиники') ?></p>
        <div class="row">
            <?php foreach ($latestNews as $post): ?>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="news-box">
                        <div class="news-inn">
                            <img src="<?= $post->getImage() ?>" class="img-responsive" alt="img">
                        </div>
                        <div class="news-text">
                            <div class="liner">
                                <h4 style="float:left"><i class="icofont-ui-calendar"></i> <?= date('d.m.Y', $post->created_at) ?></h4>
                                <h4 style="float:right"><i class="icofont-user"></i> By Admin</h4>
                            </div>
                            <a href="<?= Url::to(['post/view', 'id' => $post->id]) ?>">
                                <h2><?= $post->getTitle() ?></h2>
                            </a>
                            <p><?= Post::cutString(strip_tags($post->getContent()), 365) ?></p>
                            <a class="i-btn" href="<?= Url::to(['post/view', 'id' => $post->id]) ?>"><i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>