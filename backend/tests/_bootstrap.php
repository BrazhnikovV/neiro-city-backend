<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');
defined('YII_APP_BASE_PATH') or define('YII_APP_BASE_PATH', __DIR__.'/../../');

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../vendor/yiisoft/yii2/Yii.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../config/main.php'
);

new yii\web\Application($config);

require __DIR__ . '/../../common/config/bootstrap.php';