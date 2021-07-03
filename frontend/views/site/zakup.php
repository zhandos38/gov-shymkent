<?php
$this->title = Yii::t('site', 'Государственные закупки');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Url; ?>
<div class="container mt-80">
    <div class="row">
        <div class="col-lg-12 p-40">
            <a href="/files/zakup.PDF">Скачать государственные закупки</a> <br>
            <a href="/files/File0001.PDF">Скачать протокол об утверждении итогов по закупкам</a> <br>
            <a href="/files/File.PDF">Скачать объявление о проведении закупа лекарственных средств от 22.06.2021</a>
            <br>
            <a href="/files/zakup1.PDF">Скачать протокол об утверждении итогов по закупкам от 01.07.2021</a>
        </div>
    </div>
</div>