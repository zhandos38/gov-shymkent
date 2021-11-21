<?php
$this->title = Yii::t('site', 'Платные услуги');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= Yii::t('site', 'Платные услуги') ?></h2>
<?php if (Yii::$app->language === 'ru'): ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Положение об окозании платных услуг.PDF" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <iframe src="/files/Прейскурант 04-21.PDF" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <iframe src="/files/Врачи оказывающие ПУ.pdf" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <iframe src="/files/График работы врачей КДП проводящих платные услуги.pdf" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <iframe src="/files/Льготы гражданам-converted.pdf" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <iframe src="/files/Положение по оказанию услуг СОИСПОЛНИТЕЛЯ.PDF" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <iframe src="/files/список  врачей на коректировка Э.К.-converted.pdf" frameborder="0" width="100%" height="420px"></iframe>
        </div>
        <div class="col-md-12">
            <a href="/files/Типовой договор платный услуг новая 27.04.2021.docx">Типовой договор платный услуг новая 27.04.2021</a>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <h4>Бағалардың тізімі</h4>
            <iframe src="/files/Бағалардың тізімі.PDF" frameborder="0" width="100%" height="600px"></iframe>
        </div>
    </div>
<?php endif; ?>