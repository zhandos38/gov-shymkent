<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = 'Обновить отеделние: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Отеделние', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
