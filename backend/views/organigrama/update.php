<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Organigrama */

$this->title = 'Update Organigrama: ' . $model->CODIGO_ORG;
$this->params['breadcrumbs'][] = ['label' => 'Organigramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGO_ORG, 'url' => ['view', 'id' => $model->CODIGO_ORG]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organigrama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
