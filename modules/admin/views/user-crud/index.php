<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\UsermodelSearch $searchModel
 */

$this->title = 'Usermodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermodel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usermodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Email:email',
            'Password',
            'Phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
