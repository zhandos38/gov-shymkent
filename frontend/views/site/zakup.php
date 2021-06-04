<?php
$this->title = Yii::t('site', 'Государственные закупки');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Url; ?>
<div class="container mt-80">
    <div class="row">
        <div class="col-lg-12 p-40">
            <iframe src="/files/zakup.PDF" height="800" frameborder="0" style="border:0; width: 100%" allowfullscreen=""></iframe>
        </div>
    </div>
</div>