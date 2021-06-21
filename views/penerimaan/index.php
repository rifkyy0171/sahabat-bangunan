<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenerimaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penerimaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerimaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penerimaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penerimaan',
            'id_vendor',
            'tanggal',
            'total_harga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
