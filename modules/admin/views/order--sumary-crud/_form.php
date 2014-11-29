<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Order_Sumarymodel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="order--sumarymodel-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'Amount')->textInput() ?>

    <?= $form->field($model, 'Detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'User_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
