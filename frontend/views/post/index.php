<?php
$this->title = Yii::t('site', 'Новости');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = $this->title;

use frontend\widgets\LatestNews;
use yii\widgets\ListView;
?>
<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'layout' => '{items}{pager}',
                'itemOptions' => [
                    'class' => 'blog-box'
                ]
            ]) ?>
            </div>

            <div class="col-lg-3">
                <div class="blog-right">
                    <?= LatestNews::widget() ?>
                </div>
            </div>
        </div>
    </div>
</div>
