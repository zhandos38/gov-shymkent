<?php
$this->title = Yii::t('site', 'Организационная структура');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<p>
    <a href="/files/Штатная численности.PDF">Штатная численности.PDF</a><br>
</p>
<?php if (Yii::$app->language === 'ru'): ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Организационная структура 26.03.2021г..PDF" frameborder="0" width="100%" height="800px"></iframe>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Организационная структура 26.03.2021г..PDF" frameborder="0" width="100%" height="800px"></iframe>
        </div>
    </div>
<?php endif; ?>