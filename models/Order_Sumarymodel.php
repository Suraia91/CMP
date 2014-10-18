<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Order_Sumary".
 *
 * @property integer $Id
 * @property integer $Amount
 * @property string $Detail
 * @property string $Date
 * @property integer $User_Id
 *
 * @property Order[] $orders
 * @property User $user
 */
class Order_Sumarymodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Order_Sumary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Amount', 'Detail', 'Date', 'User_Id'], 'required'],
            [['Id', 'Amount', 'User_Id'], 'integer'],
            [['Detail'], 'string'],
            [['Date'], 'safe'],
            [['User_Id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Amount' => Yii::t('app', 'Amount'),
            'Detail' => Yii::t('app', 'Detail'),
            'Date' => Yii::t('app', 'Date'),
            'User_Id' => Yii::t('app', 'User  ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Order_Sumary_Id' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['Id' => 'User_Id']);
    }
}
