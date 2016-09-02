<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ActividadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_ACT') ?>

    <?= $form->field($model, 'CODIGO_PRIO') ?>

    <?= $form->field($model, 'CODIGO_ORG') ?>

    <?= $form->field($model, 'CODIGO_EST') ?>

    <?= $form->field($model, 'PRIORIDAD') ?>

    <?php // echo $form->field($model, 'ESTADO') ?>

    <?php // echo $form->field($model, 'FECHA_INICIO') ?>

    <?php // echo $form->field($model, 'FECHA_FIN') ?>

    <?php // echo $form->field($model, 'DURACION') ?>

    <?php // echo $form->field($model, 'COMENTARIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
