<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

    <!-- <p>
        <?= Html::a('Create Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= Url::base() ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Kategori</th>
                      <th>Deskripsi Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($dataProvider as $data){
                    ?>
                    <tr>
                      <td><?= $data->id_kategori ?></td>
                      <td><?= $data->nama_kategori ?></td>
                      <td><?= $data->desk_kategori ?></td>
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
