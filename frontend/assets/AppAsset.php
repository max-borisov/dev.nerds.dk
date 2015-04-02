<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/ekko-lightbox-min.js',
        'js/bootstrap.min.js',
        'js/ie10-viewport-bug-workaround.js',
        'js/jquery.meanmenu.min.js',
        'js/jquery.main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
