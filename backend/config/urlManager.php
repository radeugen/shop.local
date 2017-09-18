<?php
/**
 * Created by PhpStorm.
 * User: radchenkoevgeniy
 * Date: 18.09.2017
 * Time: 14:45
 */

return [
    'class' => yii\web\UrlManager::className(),
    'hostInfo' => $params['backendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a:login|logout>' =>'site/<_a>',
        '<_c:[\w\-]+>' =>'<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+/<_a:[\w\-]+>>/<id:\d+>' => '<_c>/<_a>',
    ],
];