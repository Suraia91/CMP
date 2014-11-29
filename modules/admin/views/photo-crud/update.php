<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Photomodel $model
 */

$this->title = 'Update Photomodel: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Photomodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photomodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
