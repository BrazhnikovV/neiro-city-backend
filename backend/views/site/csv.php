<?php
use yii\helpers\Url;
backend\assets\AppAsset::register($this);
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row">
    <div class="col-md-12">
    <?php $form = ActiveForm::begin([
            'action' => Url::to('/site/csv'),
            'options' => [
                'role' => 'form',
                'id'   => 'auth'
            ]
        ]); ?>
        <?= $form->field( $model, 'id' )->textInput([
            'maxlength' => true, 
            'placeholder' => 'Введите ID',
            'class' => 'form-control input-sm'
        ]) ?>
        <?= Html::submitButton( 'Искать', ['class' => 'btn btn-success btn-sm']) ?>
    <?php ActiveForm::end(); ?>
    </div>
 </div>   
<?php if ( count($result) > 0 ) { ?>
<div class="row">
    <div class="col-md-12">
        <div class="well">
            <p>ID: <span><?php echo $result['id'] ?></span></p>
            <p>DATA: <span><?php echo $result['data'] ?></span></p>
        </div>        
    </div>
</div>
<?php } ?>

