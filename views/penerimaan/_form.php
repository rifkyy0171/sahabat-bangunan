<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penerimaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penerimaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_vendor')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'total_harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
