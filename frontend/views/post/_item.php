<?php

use yii\helpers\Url; ?>
<div class="blog-left-area listt">
    <div class="blog-containt">
        <div class="blog-img">
            <img src="<?= $model->getImage() ?>" alt="">
            <div class="blog-img-hov">
                <div class="hove-top">
                    <a href="#"><i class="icofont-calendar"></i><?= date('d.m.Y H:i', $model->created_at) ?></a>
                </div>
                <div class="hover-bb">
                    <h3><?= $model->getTitle() ?></h3>
                </div>
            </div>
        </div>
        <div class="blog-text ttx">
            <p><?= \common\models\Post::cutString(strip_tags($model->getContent()), 365) ?></p>
            <a class="team-1" href="<?= Url::to(['post/view', 'id' => $model->id]) ?>">Подробнее</a>
        </div>
    </div>
</div>