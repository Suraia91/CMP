<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Photomodel $model
 */

$this->title = 'Create Photomodel';
$this->params['breadcrumbs'][] = ['label' => 'Photomodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photomodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
