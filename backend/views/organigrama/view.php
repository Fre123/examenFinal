<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Organigrama */

$this->title = $model->CODIGO_ORG;
$this->params['breadcrumbs'][] = ['label' => 'Organigramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organigrama-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CODIGO_ORG], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CODIGO_ORG], [
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
            'CODIGO_ORG',
            'DESCRIPCION_OR',
        ],
    ]) ?>

</div>
