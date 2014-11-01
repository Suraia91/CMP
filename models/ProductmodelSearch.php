<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Productmodel;

/**
 * ProductmodelSearch represents the model behind the search form about `app\models\Productmodel`.
 */
class ProductmodelSearch extends Productmodel
{
    public function rules()
    {
        return [
            [['id', 'Quantity', 'Category_Id'], 'integer'],
            [['Name', 'Description'], 'safe'],
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
        $query = Productmodel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Price' => $this->Price,
            'Quantity' => $this->Quantity,
            'Category_Id' => $this->Category_Id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
