<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '/var/www/neiro-city-backend/backend/web';
    public $baseUrl  = '/';
    public $css = [
        'css/site.css',
    ];
    
    //public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $js = [ 
        'js/Requester.js',
        'js/main.js',        
    ];
    public $depends = [
        'yii\web\YiiAsset',        
        'yii\bootstrap\BootstrapAsset',
        'yiister\adminlte\assets\Asset',
    ];
}
