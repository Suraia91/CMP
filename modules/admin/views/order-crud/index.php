<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\OrdermodelSearch $searchModel
 */

$this->title = 'Ordermodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordermodel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordermodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Quantity',
            'Price',
            'Product_Id',
            'Order_Sumary_Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
