<?php
use yii\helpers\Url;
backend\assets\AppAsset::register($this);
?>
<div id="banners" class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">
        <img id="<?php echo $image_id; ?>" class="img-responsive" src="<?php echo $image_path; ?>"/>
    </div>
</div>

