<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\prioridad;
use backend\models\organigrama;
use backend\models\estado;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Actividad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ACT')->textInput() ?>

    <?= $form->field($model, 'CODIGO_PRIO')->dropDownList(
    ArrayHelper::map(Prioridad::find()->all(),'CODIGO_PRIO', 'DESCRIPCION'),
    ['prompt'=>'Seleccione la prioridad...']
    ) 
    ?>  

    <?= $form->field($model, 'CODIGO_ORG')->dropDownList(
    ArrayHelper::map(Organigrama::find()->all(),'CODIGO_ORG', 'DESCRIPCION_OR'),
    ['prompt'=>'Seleccione la prioridad...']
    ) 
    ?> 

    <?= $form->field($model, 'CODIGO_EST')->dropDownList(
    ArrayHelper::map(Estado::find()->all(),'CODIGO_EST', 'DESCRIPCION'),
    ['prompt'=>'Seleccione la prioridad...']
    ) 
    ?>


    <?= $form->field($model, 'FECHA_INICIO')->textInput(['type'=> 'date'])  ?>

    <?= $form->field($model, 'FECHA_FIN')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'DURACION')->textInput() ?>

    <?= $form->field($model, 'COMENTARIO')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

