<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model gngstyle\finalproject\models\PlanesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'plane_id') ?>

    <?= $form->field($model, 'countries_country_id') ?>

    <?= $form->field($model, 'plane_model') ?>

    <?= $form->field($model, 'plane_adet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
