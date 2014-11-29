<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Usermodel $model
 */

$this->title = 'Create Usermodel';
$this->params['breadcrumbs'][] = ['label' => 'Usermodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
