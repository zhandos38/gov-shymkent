<?php
$this->title = Yii::t('site', 'Протокол 01-21');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<p>
    <a href="/files/Положение об окозании платных услуг.PDF">Положение об окозании платных услуг.PDF</a><br>
    <a href="/files/Прейскурант 04-21.PDF">Прейскурант 04-21.PDF</a><br>
    <a href="/files/Протокол 04-21.PDF">Протокол 04-21.PDF</a><br>
    <a href="/files/УЧЕТНАЯ ПОЛИТИКА.docx">УЧЕТНАЯ ПОЛИТИКА.docx</a><br>
</p>