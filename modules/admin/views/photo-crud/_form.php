<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Photomodel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="photomodel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Path')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Product_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
