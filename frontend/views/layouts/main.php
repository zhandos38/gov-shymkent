<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="loader-backdrop">           <!-- Loader -->
    <div class="loader">
        <i class="ion-heart-outline"></i>
    </div>
</div>

<?= $this->render('_header') ?>

<!-- hero-about-area start -->
<div class="hero-about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-about-text text-center">
                    <h2 class="text-white"><?= $this->params['title'][0] ?></h2>
                    <h4>
                        <?= Breadcrumbs::widget([
                            'options' => [
                                'style' => 'display: flex; margin: 0 auto;'//добавили
                            ],
                            'itemTemplate' => '<li>{link}<span style="padding: 0 5px">/</span></li>',
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero-about-area End -->

<div class="container" style="margin-top: 60px; margin-bottom: 60px">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<?= $this->render('_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
