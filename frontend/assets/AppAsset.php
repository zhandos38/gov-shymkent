<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/all.min.css',
        'css/icofont.min.css',
        'css/owl.carousel.min.css',
        'css/animate.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.ui.js',
        'js/popper.js',
        'js/owl.carousel.min.js',
        'js/jquery-circular-progressbar-1.2.2.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}