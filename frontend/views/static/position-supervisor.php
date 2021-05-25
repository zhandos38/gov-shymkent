<?php
$this->title = Yii::t('site', 'Положение о Наблюдательного совета');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<?php if (Yii::$app->language === 'ru'): ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Положение о Наблюдательного совета.pdf" frameborder="0" width="100%" height="800px"></iframe>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <iframe src="/files/Положение о Наблюдательного совета.pdf" frameborder="0" width="100%" height="800px"></iframe>
        </div>
    </div>
<?php endif; ?>