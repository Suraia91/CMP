<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ordermodel;

/**
 * OrdermodelSearch represents the model behind the search form about `app\models\Ordermodel`.
 */
class OrdermodelSearch extends Ordermodel
{
    public function rules()
    {
        return [
            [['Id', 'Quantity', 'Product_Id', 'Order_Sumary_Id'], 'integer'],
            [['Price'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Ordermodel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
            'Quantity' => $this->Quantity,
            'Price' => $this->Price,
            'Product_Id' => $this->Product_Id,
            'Order_Sumary_Id' => $this->Order_Sumary_Id,
        ]);

        return $dataProvider;
    }
}
