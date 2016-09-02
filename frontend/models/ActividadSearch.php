<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Actividad;

/**
 * ActividadSearch represents the model behind the search form about `frontend\models\Actividad`.
 */
class ActividadSearch extends Actividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ACT'], 'integer'],
            [['CODIGO_PRIO', 'CODIGO_ORG', 'CODIGO_EST', 'PRIORIDAD', 'ESTADO', 'FECHA_INICIO', 'FECHA_FIN', 'DURACION', 'COMENTARIO'], 'safe'],
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
        $query = Actividad::find();

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
            'ID_ACT' => $this->ID_ACT,
            'FECHA_INICIO' => $this->FECHA_INICIO,
            'FECHA_FIN' => $this->FECHA_FIN,
            'DURACION' => $this->DURACION,
        ]);

        $query->andFilterWhere(['like', 'CODIGO_PRIO', $this->CODIGO_PRIO])
            ->andFilterWhere(['like', 'CODIGO_ORG', $this->CODIGO_ORG])
            ->andFilterWhere(['like', 'CODIGO_EST', $this->CODIGO_EST])
            ->andFilterWhere(['like', 'PRIORIDAD', $this->PRIORIDAD])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO])
            ->andFilterWhere(['like', 'COMENTARIO', $this->COMENTARIO]);

        return $dataProvider;
    }
}
