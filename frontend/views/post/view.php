<?php
$this->title = Yii::t('site', 'Новости');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'Новости'), 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $model->getTitle();
?>
<?= $model->getContent() ?>
