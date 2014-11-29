<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\OrdermodelSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ordermodel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'Price') ?>

    <?= $form->field($model, 'Product_Id') ?>

    <?= $form->field($model, 'Order_Sumary_Id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
