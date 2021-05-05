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
                    <h2>About Us</h2>
                    <h4>
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero-about-area End -->

<?= Alert::widget() ?>
<?= $content ?>

<?= $this->render('_footer') ?>

<div id="back"><i class="ion-chevron-up-sharp"></i></div>

<!-- Modal -->
<div class="modal fade" id="modal-video" data-open-onload="false" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-close-sharp"></i></button>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="video-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
