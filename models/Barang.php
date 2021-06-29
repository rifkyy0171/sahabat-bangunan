<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property int $id_kategori
 * @property string $nama_barang
 * @property string $deskripsi
 * @property string $satuan
 * @property int $stok
 * @property float|null $harga_beli
 * @property float|null $harga_jual
 * @property string $gambar
 *
 * @property Kategori $kategori
 * @property ItemPenerimaan[] $itemPenerimaans
 * @property ItemPenjualan[] $itemPenjualans
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'nama_barang', 'deskripsi', 'satuan', 'stok', 'gambar'], 'required'],
            [['id_kategori', 'stok'], 'integer'],
            [['deskripsi'], 'string'],
            [['harga_beli', 'harga_jual'], 'number'],
            [['nama_barang'], 'string', 'max' => 50],
            [['satuan'], 'string', 'max' => 20],
            [['gambar'], 'string', 'max' => 200],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'id_kategori' => 'Id Kategori',
            'nama_barang' => 'Nama Barang',
            'deskripsi' => 'Deskripsi',
            'satuan' => 'Satuan',
            'stok' => 'Stok',
            'harga_beli' => 'Harga Beli',
            'harga_jual' => 'Harga Jual',
            'gambar' => 'Gambar',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * Gets query for [[ItemPenerimaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemPenerimaans()
    {
        return $this->hasMany(ItemPenerimaan::className(), ['id_barang' => 'id_barang']);
    }

    /**
     * Gets query for [[ItemPenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemPenjualans()
    {
        return $this->hasMany(ItemPenjualan::className(), ['id_barang' => 'id_barang']);
    }
}
