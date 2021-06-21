<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penerimaan */

$this->title = 'Update Penerimaan: ' . $model->id_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penerimaan, 'url' => ['view', 'id' => $model->id_penerimaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penerimaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
