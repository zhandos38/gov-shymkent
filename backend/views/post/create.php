<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = 'Добавить пост';
$this->params['breadcrumbs'][] = ['label' => 'Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
