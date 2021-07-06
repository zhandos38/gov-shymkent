<?php
$this->title = Yii::t('site', 'Государственные закупки');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = $this->title;

/* @var $file \common\models\Document */

use yii\helpers\Url; ?>
<div class="container mt-80">
    <div class="row">
        <div class="col-lg-12 p-40">
            <?php if (!empty($files)): ?>
                <?php foreach ($files as $file): ?>
                    <a href="<?= $file->getFile() ?>"><?= $file->getTitle() ?></a> <br>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>