<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Categorymodel $model
 */

$this->title = 'Create Categorymodel';
$this->params['breadcrumbs'][] = ['label' => 'Categorymodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categorymodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
