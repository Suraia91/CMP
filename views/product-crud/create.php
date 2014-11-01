<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Productmodel $model
 */

$this->title = 'Create Productmodel';
$this->params['breadcrumbs'][] = ['label' => 'Productmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
