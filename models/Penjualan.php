<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $id_penjualan
 * @property int $id_pelanggan
 * @property string $tanggal
 * @property float|null $total_harga
 *
 * @property ItemPenjualan[] $itemPenjualans
 * @property Pelanggan $pelanggan
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelanggan', 'tanggal'], 'required'],
            [['id_pelanggan'], 'integer'],
            [['tanggal'], 'safe'],
            [['total_harga'], 'number'],
            [['id_pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['id_pelanggan' => 'id_pelanggan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penjualan' => 'Id Penjualan',
            'id_pelanggan' => 'Id Pelanggan',
            'tanggal' => 'Tanggal',
            'total_harga' => 'Total Harga',
        ];
    }

    /**
     * Gets query for [[ItemPenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemPenjualans()
    {
        return $this->hasMany(ItemPenjualan::className(), ['id_transaksi' => 'id_penjualan']);
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['id_pelanggan' => 'id_pelanggan']);
    }
}
