<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Prioridad */

$this->title = 'Create Prioridad';
$this->params['breadcrumbs'][] = ['label' => 'Prioridads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prioridad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
