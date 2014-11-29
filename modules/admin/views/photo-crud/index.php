<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\PhotomodelSearch $searchModel
 */

$this->title = 'Photomodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photomodel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photomodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Path:ntext',
            'Product_Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
