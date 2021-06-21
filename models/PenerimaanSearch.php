<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penerimaan;

/**
 * PenerimaanSearch represents the model behind the search form of `app\models\Penerimaan`.
 */
class PenerimaanSearch extends Penerimaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penerimaan', 'id_vendor'], 'integer'],
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
        $query = Penerimaan::find();

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
            'id_penerimaan' => $this->id_penerimaan,
            'id_vendor' => $this->id_vendor,
            'tanggal' => $this->tanggal,
            'total_harga' => $this->total_harga,
        ]);

        return $dataProvider;
    }
}
