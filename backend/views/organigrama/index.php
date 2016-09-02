<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrganigramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organigramas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organigrama-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Organigrama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGO_ORG',
            'DESCRIPCION_OR',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
