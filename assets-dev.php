<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2018-05-31 15:53:49
 */
return [
    'all' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '/var/www/appupdater-yii2/backend/web',
        'baseUrl' => '/',
        'js' => [
            'js/all-3f2dd9ea1674fcb272de02ed93851c83.js',
        ],
        'css' => [
            'css/all-04c7393f72837d6a99bc395bab81d9f9.css',
        ],
        'sourcePath' => null,
        'depends' => [],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'all',
        ],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yii\\bootstrap\\BootstrapPluginAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'all',
        ],
    ],
    'rmrevin\\yii\\fontawesome\\AssetBundle' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yiister\\adminlte\\assets\\Asset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'yii\\bootstrap\\BootstrapPluginAsset',
            'rmrevin\\yii\\fontawesome\\AssetBundle',
            'all',
        ],
    ],
    'backend\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'yiister\\adminlte\\assets\\Asset',
            'all',
        ],
    ],
];