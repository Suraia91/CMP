<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Description
 * @property double $Price
 * @property integer $Quantity
 * @property integer $Category_Id
 *
 * @property Order[] $orders
 * @property Photo[] $photos
 * @property Category $category
 */
class Productmodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Description', 'Price', 'Quantity', 'Category_Id'], 'required'],
            [['id', 'Quantity', 'Category_Id'], 'integer'],
            [['Description'], 'string'],
            [['Price'], 'number'],
            [['Name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Name' => Yii::t('app', 'Name'),
            'Description' => Yii::t('app', 'Description'),
            'Price' => Yii::t('app', 'Price'),
            'Quantity' => Yii::t('app', 'Quantity'),
            'Category_Id' => Yii::t('app', 'Category  ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Product_Id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['Product_Id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categorymodel::className(), ['Id' => 'Category_Id']);
    }
}
