<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Order_Sumarymodel $model
 */

$this->title = 'Create Order  Sumarymodel';
$this->params['breadcrumbs'][] = ['label' => 'Order  Sumarymodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order--sumarymodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
