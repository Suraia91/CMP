<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\ProductmodelSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="productmodel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Price') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?php // echo $form->field($model, 'Category_Id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
