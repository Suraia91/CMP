<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Order_Sumarymodel $model
 */

$this->title = 'Update Order  Sumarymodel: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Order  Sumarymodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order--sumarymodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
