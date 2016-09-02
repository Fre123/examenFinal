<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PrioridadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prioridads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prioridad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prioridad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGO_PRIO',
            'DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
