<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order_Sumarymodel;

/**
 * Order_SumarymodelSearch represents the model behind the search form about `app\models\Order_Sumarymodel`.
 */
class Order_SumarymodelSearch extends Order_Sumarymodel
{
    public function rules()
    {
        return [
            [['Id', 'Amount', 'User_Id'], 'integer'],
            [['Detail', 'Date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Order_Sumarymodel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
            'Amount' => $this->Amount,
            'Date' => $this->Date,
            'User_Id' => $this->User_Id,
        ]);

        $query->andFilterWhere(['like', 'Detail', $this->Detail]);

        return $dataProvider;
    }
}
