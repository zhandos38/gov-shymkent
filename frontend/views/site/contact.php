<?php
$this->title = Yii::t('site', 'Контакты');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Url; ?>
<div class="container mt-80">
    <div class="row">
        <div class="col-lg-5 p-40">
            <h3 class="heading font-bold mb-40"><?= Yii::t('site', 'Связаться') ?></h3>
            <div class="contact-icon">
                <div class="con-icon">
                    <i class="ion-location-outline"></i>
                </div>
                <div class="con-body">
                    <h5 class="heading font-bold d-flex align-items-center mb-10"><?= Yii::t('site', 'Адрес') ?></h5>
                    <p class="mb-0 h6"><b>г.Шымкент</b>, Байтурсынова, 85a</p>
                </div>
            </div>
            <hr>
            <div class="contact-icon">
                <div class="con-icon">
                    <i class="ion-call-outline"></i>
                </div>
                <div class="con-body">
                    <h5 class="heading font-bold d-flex align-items-center mb-10"><?= Yii::t('site', 'Номера телефона') ?></h5>
                    <p class="mb-0 h6">Приемная главного врача: 36-11-13</p>
                    <p class="mb-0 h6">Телефон доверия: 36-11-13</p>
                    <p class="mb-0 h6">Зам. главного врача: 41-71-30</p>
                    <p class="mb-0 h6">Бухгалтерия: 36-11-10</p>
                    <p class="mb-0 h6">Регистратура: 36-11-17</p>
                </div>
            </div>
            <hr>
            <div class="contact-icon">
                <div class="con-icon">
                    <i class="ion-mail-outline"></i>
                </div>
                <div class="con-body">
                    <h5 class="heading font-bold d-flex align-items-center mb-10">Email</h5>
                    <p class="mb-0 h6">info@goc-shymkent.kz</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 p-40" style="background-image: url(/images/world-map-1.png); background-repeat: no-repeat; background-position: 95% 4%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.9010649181964!2d69.60082411571018!3d42.34463264406781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a91c43fcf8d6fb%3A0x168e8a13e06acad0!2z0J7QsdC70LDRgdGC0L3QvtC5INC-0L3QutC-0LvQvtCz0LjRh9C10YHQutC40Lkg0LTQuNGB0L_QsNC90YHQtdGA!5e0!3m2!1sru!2skz!4v1504899335380" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen=""></iframe>
        </div>
    </div>
</div>