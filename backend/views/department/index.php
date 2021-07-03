<?php

use common\models\Department;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отеделнии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать отеделние', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title_kz',
            'title_ru',
            [
                'attribute' => 'group',
                'value' => function(Department $model) {
                    return $model->getGroupLabel();
                },
                'filter' => Department::getGroupLabels()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
