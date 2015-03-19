<?php

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '/articles' => 'article/index',
        '/articles/<id:\d+>' => 'article/view',
    ],
];