<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Productmodel $model
 */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmodel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Name',
            'Description:ntext',
            'Price',
            'Quantity',
            'Category_Id',
        ],
    ]) ?>

</div>
