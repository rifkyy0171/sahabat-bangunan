<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PelangganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelanggans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelanggan-index">

    <!-- <p>
        <?= Html::a('Create Pelanggan', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pelanggan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= Url::base() ?>">Home</a></li>
          <li class="breadcrumb-item active">Data Pelanggan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Pelanggan</th>
                  <th>Telpon</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach($dataProvider->models as $data){
                ?>
                <tr>
                  <td><?= $data->id_pelanggan ?></td>
                  <td><?= $data->nama_pelanggan ?></td>
                  <td><?= $data->telp_pelanggan ?></td>
                  <td><?= $data->alamat_pelanggan ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>