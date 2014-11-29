<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Usermodel $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="usermodel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Phone')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
