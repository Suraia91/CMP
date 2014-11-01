<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Ordermodel $model
 */

$this->title = 'Create Ordermodel';
$this->params['breadcrumbs'][] = ['label' => 'Ordermodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordermodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
