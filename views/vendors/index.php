<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-index">

   

    <!-- <p>
        <?= Html::a('Create Vendor', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Vendor</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= Url::base() ?>">Home</a></li>
          <li class="breadcrumb-item active">Data Vendor</li>
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
                  <th>Nama Vendor</th>
                  <th>Telpon</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach($dataProvider->models as $data){
                ?>
                <tr>
                  <td><?= $data->id_vendor ?></td>
                  <td><?= $data->nama_vendor ?></td>
                  <td><?= $data->telp_vendor ?></td>
                  <td><?= $data->alamat_vendor ?></td>
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


</div>
