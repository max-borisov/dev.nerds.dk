<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
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
    ],
];
