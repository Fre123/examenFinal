<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Organigrama */

$this->title = 'Create Organigrama';
$this->params['breadcrumbs'][] = ['label' => 'Organigramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organigrama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
