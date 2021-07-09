<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

<!-- <p>
    <?= Html::a('Create Kategori', ['create'], ['class' => 'btn btn-success']) ?>
</p> -->

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Barang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= Url::base() ?>">Home</a></li>
          <li class="breadcrumb-item active">Data Barang</li>
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
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th>Stok</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach($dataProvider as $data){
                ?>
                <tr>
                  <td><?= $data->id_barang ?></td>
                  <td><?= $data->nama_barang ?></td>
                  <td><?= $data->kategori->nama_kategori ?></td>
                  <td><?= $data->satuan ?></td>
                  <td><?= $data->stok ?></td>
                  <td><?= $data->harga_beli ?></td>
                  <td><?= $data->harga_jual ?></td>
                  <td><?= $data->deskripsi ?></td>
                  <td>Gambar</td>
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

