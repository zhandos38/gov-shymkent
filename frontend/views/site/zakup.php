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
        </div>
    </div>
</div>