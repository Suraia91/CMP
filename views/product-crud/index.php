<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\ProductmodelSearch $searchModel
 */

$this->title = 'Productmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmodel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productmodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Name',
            'Description:ntext',
            'Price',
            'Quantity',
            // 'Category_Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
