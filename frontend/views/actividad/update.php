<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Actividad */

$this->title = 'Update Actividad: ' . $model->ID_ACT;
$this->params['breadcrumbs'][] = ['label' => 'Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_ACT, 'url' => ['view', 'id' => $model->ID_ACT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
