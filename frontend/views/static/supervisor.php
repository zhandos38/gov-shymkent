<?php
$this->title = Yii::t('site', 'Наблюдательный совет');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<p>
    <a href="/files/Приказ о наз НС Мауленов Ж О.pdf">Приказ о наз НС Мауленов Ж О.pdf</a><br>
    <a href="/files/Приказ о наз НС Тастанбекова Р Н.PDF">Приказ о наз НС Тастанбекова Р Н.PDF</a><br>
    <a href="/files/Приказ о наз состав НС.PDF">Приказ о наз состав НС.PDF</a><br>
</p>
<?php if (Yii::$app->language === 'ru'): ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Нблюдательный совет.pdf" frameborder="0" width="100%" height="800px"></iframe>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Нблюдательный совет.pdf" frameborder="0" width="100%" height="800px"></iframe>
        </div>
    </div>
<?php endif; ?>