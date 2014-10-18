<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $Id
 * @property string $Email
 * @property string $Password
 * @property string $Phone
 *
 * @property OrderSumary[] $orderSumaries
 */
class Usermodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Email', 'Password', 'Phone'], 'required'],
            [['Id'], 'integer'],
            [['Email', 'Password', 'Phone'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Email' => Yii::t('app', 'Email'),
            'Password' => Yii::t('app', 'Password'),
            'Phone' => Yii::t('app', 'Phone'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderSumaries()
    {
        return $this->hasMany(OrderSumary::className(), ['User_Id' => 'Id']);
    }
}
