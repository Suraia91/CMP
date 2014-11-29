<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Photo".
 *
 * @property integer $Id
 * @property string $Path
 * @property integer $Product_Id
 *
 * @property Product $product
 */
class Photomodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'Path', 'Product_Id'], 'required'],
            [[ 'Product_Id'], 'integer'],
            [['Path'], 'string'],
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
            'Path' => Yii::t('app', 'Path'),
            'Product_Id' => Yii::t('app', 'Product  ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'Product_Id']);
    }
}
