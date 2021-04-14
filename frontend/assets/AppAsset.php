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
//        'css/bootstrap.min.css',
        'css/ionicons.css',
        'css/medwise-icons.css',
        'css/vendors.min.css',
        'css/style.min.css',
        'css/components.min.css',
        'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;800&amp;display=swap',
        'https://fonts.googleapis.com/css2?family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap',
        'css/custom.css',
    ];
    public $js = [
//        'js/jquery.min.js',
//        'js/bootstrap.bundle.min.js',
//        'js/jquery-ui.min.js',
        'js/slick.min.js',
        'js/jquery.appear.min.js',
        'js/jquery.countTo.min.js',
        'js/script.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}