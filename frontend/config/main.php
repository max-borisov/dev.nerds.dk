<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'app-frontend',
    'language'            => 'dk',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'defaultRoute'        => 'front/index',
    'controllerNamespace' => 'frontend\controllers',
    'components'          => [
        'view' => [
            'title' => 'Hello'
        ],
        'user' => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // Composer yurkinx/yii2-image
        'imageProcessor' => [
            'class'  => 'yii\image\ImageDriver',
            'driver' => 'GD',  //GD or Imagick
        ],
        'image' => [
            'class'   => 'frontend\components\Image',
            'quality' => 100,
        ],
        'imagePlaceholder' => [
            'class'   => 'frontend\components\ImagePlaceholder',
        ],
        'urlManager' => require(__DIR__ . '/routes.php'),
    ],
    'params' => $params,
];
