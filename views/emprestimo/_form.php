<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emprestimo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_titulo')->textInput() ?>

    <?= $form->field($model, 'data_empr')->textInput() ?>

    <?= $form->field($model, 'fk_cliente')->textInput() ?>

    <?= $form->field($model, 'fk_funcionario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
