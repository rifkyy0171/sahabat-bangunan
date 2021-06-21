<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penerimaan".
 *
 * @property int $id_penerimaan
 * @property int $id_vendor
 * @property string $tanggal
 * @property float|null $total_harga
 *
 * @property ItemPenerimaan[] $itemPenerimaans
 * @property Vendor $vendor
 */
class Penerimaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penerimaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_vendor', 'tanggal'], 'required'],
            [['id_vendor'], 'integer'],
            [['tanggal'], 'safe'],
            [['total_harga'], 'number'],
            [['id_vendor'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['id_vendor' => 'id_vendor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penerimaan' => 'Id Penerimaan',
            'id_vendor' => 'Id Vendor',
            'tanggal' => 'Tanggal',
            'total_harga' => 'Total Harga',
        ];
    }

    /**
     * Gets query for [[ItemPenerimaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemPenerimaans()
    {
        return $this->hasMany(ItemPenerimaan::className(), ['id_penerimaan' => 'id_penerimaan']);
    }

    /**
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id_vendor' => 'id_vendor']);
    }
}
