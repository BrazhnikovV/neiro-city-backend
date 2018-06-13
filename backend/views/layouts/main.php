<?php

/**
 * @var $content string
 */

use yii\helpers\Html;
use yii\helpers\Url;

//yiister\adminlte\assets\Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body class="">
    <?php $this->beginBody() ?>
    <div id="wrapper" class="container">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                    
                    <a class="navbar-brand" href="/">Neiro-city-backend</a>
                </div>
                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                        <li class="">
                            <a href="<?php echo Url::to('/site/csv') ?>"> csv</a>
                        </li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>   
        <?= $content ?>        
    </div><!-- ./wrapper -->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
