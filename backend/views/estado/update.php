<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Estado */

$this->title = 'Update Estado: ' . $model->CODIGO_EST;
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGO_EST, 'url' => ['view', 'id' => $model->CODIGO_EST]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
