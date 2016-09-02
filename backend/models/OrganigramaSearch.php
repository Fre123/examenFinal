<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Organigrama;

/**
 * OrganigramaSearch represents the model behind the search form about `backend\models\Organigrama`.
 */
class OrganigramaSearch extends Organigrama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODIGO_ORG', 'DESCRIPCION_OR'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Organigrama::find();

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
        $query->andFilterWhere(['like', 'CODIGO_ORG', $this->CODIGO_ORG])
            ->andFilterWhere(['like', 'DESCRIPCION_OR', $this->DESCRIPCION_OR]);

        return $dataProvider;
    }
}
