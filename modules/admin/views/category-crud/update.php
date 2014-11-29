<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Categorymodel $model
 */

$this->title = 'Update Categorymodel: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Categorymodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categorymodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
