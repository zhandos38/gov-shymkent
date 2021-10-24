<?php
/* @var $model \common\models\Department */

$this->title = $model->getTitle();

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Url;
?>
<div class="w-100">
    <?= $model->getContent() ?>
</div>
