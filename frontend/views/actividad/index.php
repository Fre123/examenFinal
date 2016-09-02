<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ActividadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actividad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Actividad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_ACT',
            'CODIGO_PRIO',
            'CODIGO_ORG',
            'CODIGO_EST',
            'PRIORIDAD',
            // 'ESTADO',
            // 'FECHA_INICIO',
            // 'FECHA_FIN',
            // 'DURACION',
            // 'COMENTARIO:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
