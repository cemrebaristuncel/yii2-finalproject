<?php

namespace gngstyle\finalproject\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use gngstyle\finalproject\models\Countries;

/**
 * CountriesSearch represents the model behind the search form of `gngstyle\finalproject\models\Countries`.
 */
class CountriesSearch extends Countries
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'abGirisYili'], 'integer'],
            [['country_adi', 'paraBirimi'], 'safe'],
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
        $query = Countries::find();

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
            'country_id' => $this->country_id,
            'abGirisYili' => $this->abGirisYili,
        ]);

        $query->andFilterWhere(['like', 'country_adi', $this->country_adi])
            ->andFilterWhere(['like', 'paraBirimi', $this->paraBirimi]);

        return $dataProvider;
    }
}
