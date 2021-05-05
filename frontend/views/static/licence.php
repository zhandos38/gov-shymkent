<?php
$this->title = Yii::t('site', 'Лицензия');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <a href="/">Приложение к государственной лицензий</a><br>
    <a href="/">Справка о перерегистрации юридического лица</a>
</div>