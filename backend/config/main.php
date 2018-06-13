<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    //require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php'
    //require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    //'basePath' => realpath(__DIR__ . '/../'),
    'controllerNamespace' => 'backend\controllers',
    //'bootstrap' => ['debug'],
    //'modules' => [
    //    'debug' => [
    //        'class' => 'yii\debug\Module'
    //    ]        
    //],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'your secret key here'
        ],
        'user' => [
            'identityClass' => 'backend\models\user\UserRecord',
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        /*
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        */
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'db' => require(__DIR__ . '/db.php'),
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest']
        ],
        //'assetManager' => [
        //    'bundles' => require __DIR__ . '/../../assets-dev.php',  
        //]
    ],
    'params' => $params,
];
