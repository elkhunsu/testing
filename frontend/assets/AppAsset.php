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
        'css/site.css',
        'css/jquery.steps.css'
    ];
    public $js = [
        'js/jquery-3.2.1.js',
        'js/jquery.noty.packaged.min.js',
        'js/jquery.steps.js',
        'js/bootstrap.min.js',
        'js/jquery.backstretch.min.js',
        'js/jquery.validate.min.js',
        'js/jquery.form.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
