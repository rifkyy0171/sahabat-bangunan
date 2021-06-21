<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penjualan;

/**
 * PenjualanSearch represents the model behind the search form of `app\models\Penjualan`.
 */
class PenjualanSearch extends Penjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penjualan', 'id_pelanggan'], 'integer'],
            [['tanggal'], 'safe'],
            [['total_harga'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Penjualan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_penjualan' => $this->id_penjualan,
            'id_pelanggan' => $this->id_pelanggan,
            'tanggal' => $this->tanggal,
            'total_harga' => $this->total_harga,
        ]);

        return $dataProvider;
    }
}
