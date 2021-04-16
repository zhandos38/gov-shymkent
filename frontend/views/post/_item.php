<?php

use yii\helpers\Url; ?>
<div class="blog-header">
    <img src="<?= $model->getImage() ?>" class="img-fluid rounded" alt="">
    <h3 class="heading font-bold post-title"><a href="<?= Url::to(['post/view', 'id' => $model->id]) ?>"><?= $model->getTitle() ?></a></h3>
    <div class="blog-meta">
        <ul class="meta-list">
            <li class="posted-on">Posted On :
                <a href="#">
                    <span class="date">10</span>
                    <span class="month">Oct</span>
                    <span class="year">2021</span>
                </a>
            </li>
            <li class="posted-by">By : <a href="#">Joy Mathew</a></li>
            <li class="posted-in">In <a href="#">Health Care</a></li>
        </ul>
    </div>
</div>
<div class="blog-excerpt">
    <?= \common\models\Post::cutString(strip_tags($model->getContent()), 365) ?>
</div>
<a href="blog-single.html" class="btn btn-light mt-10">Подробнее</a>
