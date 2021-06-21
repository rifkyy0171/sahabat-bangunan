<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penerimaan */

$this->title = 'Create Penerimaan';
$this->params['breadcrumbs'][] = ['label' => 'Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerimaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
