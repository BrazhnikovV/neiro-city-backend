<?php
/**
 * Configuration file for the "yii asset" console command.
 */

// In the console environment, some path aliases may not exist. Please define these:
// Yii::setAlias('@webroot', __DIR__ . '/../web');
// Yii::setAlias('@web', '/');

return [
    'jsCompressor' => 'java -jar assets/compiler.jar --js {from} --js_output_file {to}',
    'cssCompressor' => 'java -jar assets/yuicompressor.jar --type css {from} -o {to}',
    'deleteSource' => false,
    // The list of asset bundles to compress:
    'bundles' => [
         'backend\assets\AppAsset',
        // 'yii\web\YiiAsset',
        // 'yii\web\JqueryAsset',
    ],
    // Asset bundle for compression output:
    'targets' => [
        'all' => [
            'class' => 'yii\web\AssetBundle',
            'basePath' => '/var/www/appupdater-yii2/backend/web',
            'baseUrl' => '/',
            'js' => 'js/all-{hash}.js',
            'css' => 'css/all-{hash}.css',
        ],
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '/var/www/appupdater-yii2/backend/web/assets',
        'baseUrl'  => '/assets',
    ],
];