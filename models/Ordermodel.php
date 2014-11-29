<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Order".
 *
 * @property integer $Id
 * @property integer $Quantity
 * @property double $Price
 * @property integer $Product_Id
 * @property integer $Order_Sumary_Id
 *
 * @property Product $product
 * @property OrderSumary $orderSumary
 */
class Ordermodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'Quantity', 'Price', 'Product_Id', 'Order_Sumary_Id'], 'required'],
            [[ 'Quantity', 'Product_Id', 'Order_Sumary_Id'], 'integer'],
            [['Price'], 'number'],
            [['Order_Sumary_Id'], 'unique'],
            [['Product_Id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Quantity' => Yii::t('app', 'Quantity'),
            'Price' => Yii::t('app', 'Price'),
            'Product_Id' => Yii::t('app', 'Product  ID'),
            'Order_Sumary_Id' => Yii::t('app', 'Order  Sumary  ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'Product_Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderSumary()
    {
        return $this->hasOne(OrderSumary::className(), ['Id' => 'Order_Sumary_Id']);
    }
}
