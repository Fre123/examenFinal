<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Actividad */

$this->title = $model->ID_ACT;
$this->params['breadcrumbs'][] = ['label' => 'Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actividad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_ACT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_ACT], [
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
            'ID_ACT',
            'CODIGO_PRIO',
            'CODIGO_ORG',
            'CODIGO_EST',
            'PRIORIDAD',
            'ESTADO',
            'FECHA_INICIO',
            'FECHA_FIN',
            'DURACION',
            'COMENTARIO:ntext',
        ],
    ]) ?>

</div>
