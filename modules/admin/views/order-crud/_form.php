<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Ordermodel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ordermodel-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'Quantity')->textInput() ?>

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'Product_Id')->textInput() ?>

    <?= $form->field($model, 'Order_Sumary_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
