<?php
use yii\helpers\Url;

?>
<header class="header1">
    <div class="headerTop">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-sm-3 col-xs-12">
                    <a href="/" class="logo">
                        <div style="display:flex;justify-content: center;align-items: center">
                            <img src="/img/logo.png" class="img-responsive" style="width: 80px" alt="logo">
                            <div style="padding-left: 12px; padding-bottom: 5px; font-size: 16px; color: #303b41">
                                <div><b>ГКП НА ПХВ</b></div>
                                <div style="color: #007bff"><b>Городской онкологический центр</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-sm-9 col-xs-12 pull-right">
                    <div class="contact-location">
                        <div class="left-location">
                            <i class="icofont-phone"></i>
                            <div class="info">
                                <h4>Телефон доверия</h4>
                                <h6><a href="tel:87252361113">+7 (7252) 36 11 13</a></h6>
                            </div>
                        </div>
                        <div class="left-location textright">
                            <i class="icofont-wall-clock"></i>
                            <div class="info">
                                <h4>Без выходных</h4>
                                <h6>24/7</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="main-navigation-wrapper" class="navbar navbar-default header-middle">
        <div class="container">
            <div class="navbar-header">
                <div class="logo-menu"><a href="index.html"><img src="/img/about/logo.png" alt="logo"></a>
                </div>
                <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                        class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="main-navigation" class="collapse navbar-collapse ">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/" class="active"><?= Yii::t('site', 'Главная') ?></a>
                    </li>
                    <li class="dropdown">
                        <a href="<?= Url::to(['static/about']) ?>"><?= Yii::t('site', 'О центре') ?></a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            <li><a href="<?= Url::to(['static/target']) ?>"><?= Yii::t('site', 'Цели и задачи') ?></a></li>
                            <li><a href="<?= Url::to(['static/about']) ?>"><?= Yii::t('site', 'О деятельности') ?></a></li>
                            <li class="submenu_child">
                                <a href="#"><?= Yii::t('site', 'Администрация') ?></a><i class="fa fa-chevron-down"></i>
                                <ul class="dropdown-submenu second_submenu">
                                    <li><a href="<?= Url::to(['static/director']) ?>"><?= Yii::t('site', 'Директор') ?></a></li>
                                    <li><a href="<?= Url::to(['static/vice']) ?>"><?= Yii::t('site', 'Заместители') ?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?= Url::to(['static/structure']) ?>"><?= Yii::t('site', 'Структура') ?></a></li>
                            <li><a href="<?= Url::to(['static/medicine']) ?>"><?= Yii::t('site', 'Лекарственное обеспечение') ?></a></li>
                            <li><a href="<?= Url::to(['static/screening']) ?>"><?= Yii::t('site', 'Скрининг населения') ?></a></li>
                            <li><a href="<?= Url::to(['static/specialist']) ?>"><?= Yii::t('site', 'Специалисты') ?></a></li>
                            <li><a href="<?= Url::to(['static/people']) ?>"><?= Yii::t('site', 'Населению') ?></a></li>
                            <li><a href="<?= Url::to(['static/licence']) ?>"><?= Yii::t('site', 'Лицензия') ?></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><?= Yii::t('site', 'Клиника') ?></a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            <li class="submenu_child">
                                <a href="#"><?= Yii::t('site', 'Клинические отделения') ?></a><i class="fa fa-chevron-down"></i>
                                <ul class="dropdown-submenu second_submenu">
                                    <li><a href="#"><?= Yii::t('site', 'Торакоабдоминальная хирургия') ?></a></li>
                                    <li><a href="<?= Url::to(['static/radiogynecology']) ?>"><?= Yii::t('site', 'Радиогинекология') ?></a></li>
                                    <li><a href="#"><?= Yii::t('site', 'Радиология') ?></a></li>
                                    <li><a href="<?= Url::to(['static/mammalogy']) ?>"><?= Yii::t('site', 'Маммология') ?></a></li>
                                    <li><a href="<?= Url::to(['static/chem']) ?>"><?= Yii::t('site', 'Химиятерапия') ?></a></li>
                                    <li><a href="#"><?= Yii::t('site', 'Паллиативная помощь') ?></a></li>
                                    <li><a href="<?= Url::to(['static/anestasy']) ?>"><?= Yii::t('site', 'Отделение анестезиологии и реанимации и интенсивной терапии') ?></a></li>
                                    <li><a href="#"><?= Yii::t('site', 'Операционный блок') ?></a></li>
                                    <li><a href="<?= Url::to(['static/day']) ?>"><?= Yii::t('site', 'Дневной стационар химиотерапии и лучевой терапии') ?></a></li>
                                    <li><a href="<?= Url::to(['static/consult']) ?>"><?= Yii::t('site', 'Консультативно-диагноситческая поликлиника') ?></a></li>
                                    <li><a href="#"><?= Yii::t('site', 'Отдел дозиметрии и физико-технического обеспечения лучевой терапии') ?></a></li>
                                </ul>
                            </li>
                            <li class="submenu_child">
                                <a href="#"><?= Yii::t('site', 'Отделение диагностики') ?></a><i class="fa fa-chevron-down"></i>
                                <ul class="dropdown-submenu second_submenu">
                                    <li><a href="#"><?= Yii::t('site', 'Клинико-диагностическая лаборатория') ?></a></li>
                                    <li><a href="<?= Url::to(['static/cisto']) ?>"><?= Yii::t('site', 'Цитогистологическая лаборатория') ?></a></li>
                                    <li><a href="<?= Url::to(['static/light']) ?>"><?= Yii::t('site', 'Лучевая диагностика') ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['post/index']) ?>">Новости</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/contact']) ?>"><?= Yii::t('site', 'Контакты') ?></a>
                    </li>
                </ul>
                <div class="header-nav-right">
                    <div class="headerButton">
                        <a class="acctivee" href="#"><?= Yii::t('site', 'Записаться') ?></a>
                    </div>
                    <div class="header-socials pt-3">
                        <a href="<?= Url::to(array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'ru'])) ?>" class="cartButton text-white">RU</a>
                        <a href="<?= Url::to(array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'kz'])) ?>" class="cartButton text-white">KZ</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>