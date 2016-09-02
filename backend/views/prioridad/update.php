<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Prioridad */

$this->title = 'Update Prioridad: ' . $model->CODIGO_PRIO;
$this->params['breadcrumbs'][] = ['label' => 'Prioridads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGO_PRIO, 'url' => ['view', 'id' => $model->CODIGO_PRIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prioridad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
