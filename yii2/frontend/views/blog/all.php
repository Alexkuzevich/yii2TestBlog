<?php

/* @var $this yii\web\View */
/* @var $blogs \common\models\Blog */

?>

<div class="body-content">

    <div class="row">
        <?php foreach ($blogs as $one) :?>
        <div class="col-lg-12">
            <h2><?=$one->title?></h2>
            <?=$one->text?>
            <?= \yii\bootstrap\Html::a('Подробнее', ['blog/one', 'url'=>$one->url], ['class'=>'btn btn-success']) ?>
        </div>
        <?php endforeach; ?>
    </div>

</div>