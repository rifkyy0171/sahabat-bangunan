<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_penerimaan".
 *
 * @property int $id_penerimaan
 * @property int $id_barang
 *
 * @property Barang $barang
 * @property Penerimaan $penerimaan
 */
class ItemPenerimaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_penerimaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penerimaan', 'id_barang'], 'required'],
            [['id_penerimaan', 'id_barang'], 'integer'],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
            [['id_penerimaan'], 'exist', 'skipOnError' => true, 'targetClass' => Penerimaan::className(), 'targetAttribute' => ['id_penerimaan' => 'id_penerimaan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penerimaan' => 'Id Penerimaan',
            'id_barang' => 'Id Barang',
        ];
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }

    /**
     * Gets query for [[Penerimaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenerimaan()
    {
        return $this->hasOne(Penerimaan::className(), ['id_penerimaan' => 'id_penerimaan']);
    }
}
