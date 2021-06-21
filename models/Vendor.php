<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property int $id_vendor
 * @property string $nama_vendor
 * @property string $telp_vendor
 * @property string $alamat_vendor
 *
 * @property Penerimaan[] $penerimaans
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_vendor', 'telp_vendor', 'alamat_vendor'], 'required'],
            [['alamat_vendor'], 'string'],
            [['nama_vendor'], 'string', 'max' => 30],
            [['telp_vendor'], 'string', 'max' => 18],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_vendor' => 'Id Vendor',
            'nama_vendor' => 'Nama Vendor',
            'telp_vendor' => 'Telp Vendor',
            'alamat_vendor' => 'Alamat Vendor',
        ];
    }

    /**
     * Gets query for [[Penerimaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenerimaans()
    {
        return $this->hasMany(Penerimaan::className(), ['id_vendor' => 'id_vendor']);
    }
}
