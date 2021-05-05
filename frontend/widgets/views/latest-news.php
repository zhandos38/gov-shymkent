<?php
?>
<div class="recent-post">
    <div class="sec-title">
        <h3>Последние новости</h3>
    </div>
    <?php foreach ($posts as $post): ?>
        <div class="single-post">
            <p><?= $post->getTitle() ?></p>
            <i class="icofont-calendar"></i>
            <a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>"> <?= date('d.m.Y', $post->created_at) ?></a>
        </div>
    <?php endforeach; ?>
</div>
