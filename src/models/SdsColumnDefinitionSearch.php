<?php

namespace umbalaconmeogia\simpledatasystem\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use umbalaconmeogia\simpledatasystem\models\SdsColumnDefinition;

/**
 * SdsColumnDefinitionSearch represents the model behind the search form of `umbalaconmeogia\simpledatasystem\models\SdsColumnDefinition`.
 */
class SdsColumnDefinitionSearch extends SdsColumnDefinition
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'i18n'], 'integer'],
            [['object_definition_code', 'name', 'code', 'type', 'description', 'value_format'], 'safe'],
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
        $query = SdsColumnDefinition::find();

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
            'id' => $this->id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
            'i18n' => $this->i18n,
        ]);

        $query->andFilterWhere(['like', 'object_definition_code', $this->object_definition_code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'value_format', $this->value_format]);

        return $dataProvider;
    }
}
