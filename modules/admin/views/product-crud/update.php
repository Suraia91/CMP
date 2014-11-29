<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Productmodel $model
 */

$this->title = 'Update Productmodel: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
