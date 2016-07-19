<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 17.07.16
 * Time: 16:09
 */

namespace common\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;

class BearingsSearch extends Bearings
{

    public $inner_d_from;
    public $inner_d_to;

    public $outer_d_from;
    public $outer_d_to;

    public $b_from;
    public $b_to;

    public $weight_from;
    public $weight_to;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [
                [
                    'name',
                    'inner_d',
                    'outer_d',
                    'B', 'weight',
                    'inner_d_from',
                    'inner_d_to',
                    'outer_d_from',
                    'outer_d_to', 'b_from',
                    'b_to',
                    'weight_from',
                    'weight_to',
                    'brand'
                ],
                'safe'],
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

    /*
    * Creates data provider instance with search query applied
    *
    * @param array $params
    *
    * @return ActiveDataProvider
    */
    public function search($params)
    {
        $query = Bearings::find();

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
            'brand' => $this->brand
        ]);

        //inner_d from
        if ($this->inner_d_from == 0) {
            $inner_d_from = 0;
        }
        else {
            $inner_d_from = $this->inner_d_from;
        }
        //inner_d to
        if ($this->inner_d_to == 0) {
            $inner_d_to = Bearings::find()->select('inner_d')->max('inner_d');
        }
        else {
            $inner_d_to = $this->inner_d_to;
        }


        //outer_d from
        if ($this->outer_d_from == 0) {
            $outer_d_from = 0;
        }
        else {
            $outer_d_from = $this->outer_d_from;
        }
        //outer_d to
        if ($this->outer_d_to == 0) {
            $outer_d_to = Bearings::find()->select('outer_d')->max('outer_d');
        }
        else {
            $outer_d_to = $this->outer_d_to;
        }

        //b_from
        if ($this->b_from == 0) {
            $b_from = 0;
        }
        else {
            $b_from = $this->b_from;
        }
        //b to
        if ($this->b_to == 0) {
            $b_to = Bearings::find()->select('B')->max('B');
        }
        else {
            $b_to = $this->b_to;
        }
        //weight from
        if ($this->weight_from == 0) {
            $weight_from = 0;
        }
        else {
            $weight_from = $this->weight_from;
        }
        //weight to
        if ($this->weight_to == 0) {
            $weight_to = Bearings::find()->select('weight')->max('weight');
        }
        else {
            $weight_to = $this->weight_to;
        }
        $query->andFilterWhere(['between', 'inner_d', $inner_d_from, $inner_d_to]);
        $query->andFilterWhere(['between', 'outer_d', $outer_d_from, $outer_d_to]);
        $query->andFilterWhere(['between', 'B', $b_from, $b_to]);
        $query->andFilterWhere(['between', 'weight', $weight_from, $weight_to]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}