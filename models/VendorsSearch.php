<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendors;

/**
 * VendorSearch represents the model behind the search form of `app\models\Vendor`.
 */
class VendorsSearch extends Vendors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_vendor'], 'integer'],
            [['nama_vendor', 'telp_vendor', 'alamat_vendor'], 'safe'],
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
        $query = Vendors::find();

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
            'id_vendor' => $this->id_vendor,
        ]);

        $query->andFilterWhere(['like', 'nama_vendor', $this->nama_vendor])
            ->andFilterWhere(['like', 'telp_vendor', $this->telp_vendor])
            ->andFilterWhere(['like', 'alamat_vendor', $this->alamat_vendor]);

        return $dataProvider;
    }
}
