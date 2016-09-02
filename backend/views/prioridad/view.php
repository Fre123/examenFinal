<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Prioridad */

$this->title = $model->CODIGO_PRIO;
$this->params['breadcrumbs'][] = ['label' => 'Prioridads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prioridad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CODIGO_PRIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CODIGO_PRIO], [
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
            'CODIGO_PRIO',
            'DESCRIPCION',
        ],
    ]) ?>

</div>
