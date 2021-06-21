<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id_pelanggan
 * @property string $nama_pelanggan
 * @property string $telp_pelanggan
 * @property string $alamat_pelanggan
 *
 * @property Penjualan[] $penjualans
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pelanggan', 'telp_pelanggan', 'alamat_pelanggan'], 'required'],
            [['alamat_pelanggan'], 'string'],
            [['nama_pelanggan'], 'string', 'max' => 30],
            [['telp_pelanggan'], 'string', 'max' => 18],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'nama_pelanggan' => 'Nama Pelanggan',
            'telp_pelanggan' => 'Telp Pelanggan',
            'alamat_pelanggan' => 'Alamat Pelanggan',
        ];
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::className(), ['id_pelanggan' => 'id_pelanggan']);
    }
}
