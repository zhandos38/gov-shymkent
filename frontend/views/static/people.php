<?php
$this->title = Yii::t('site', 'Населению');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= Yii::t('site', 'Населению') ?></h2>
<?php if (Yii::$app->language === 'ru'): ?>
<div class="row">
    <div class="col-md-12">
        <iframe src="/files/Положение об окозании платных услуг.PDF" frameborder="0" width="100%" height="420px"></iframe>
    </div>
    <div class="col-md-12">
        <iframe src="/files/Прейскурант 04-21.PDF" frameborder="0" width="100%" height="420px"></iframe>
    </div>
</div>
<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Бағалардың тізімі.PDF" frameborder="0" width="100%" height="420px"></iframe>
        </div>
    </div>
<?php endif; ?>
<p>
    Договор по предоставлению медицинской помощи в рамках гарантированного объема бесплатной медицинской помощи, заключаемого между пациентом и медицинской организацией
    Обязательное социальное медицинское страхование
</p>
<h4>
    Видео
</h4>
<div class="row">
    <div class="col-md-6">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/foouQdNapg4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/EZV1moZrxWg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/bFTxnGXt-uc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/j_C_pqGZp-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>