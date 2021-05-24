<?php
$this->title = Yii::t('site', 'Лицензия');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2>
    Лицензия
</h2>
<iframe src="/files/Лицензия.pdf" frameborder="0" width="100%" height="800px"></iframe>