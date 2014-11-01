<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Photomodel;

/**
 * PhotomodelSearch represents the model behind the search form about `app\models\Photomodel`.
 */
class PhotomodelSearch extends Photomodel
{
    public function rules()
    {
        return [
            [['Id', 'Product_Id'], 'integer'],
            [['Path'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Photomodel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
            'Product_Id' => $this->Product_Id,
        ]);

        $query->andFilterWhere(['like', 'Path', $this->Path]);

        return $dataProvider;
    }
}
