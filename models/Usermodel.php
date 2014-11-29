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
class Usermodel extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['Email', 'Password', 'Phone'], 'required'],
            [['Email', 'Password', 'Phone'], 'string', 'max' => 50],
            [['Email'], 'email'],
            [['Email'], 'unique'],
            [['Password'], 'checkPassword']
        ];
    }
 
    public function checkPassword($attribute, $params)
    {
        if (!preg_match('/[a-z]/',$this->$attribute) || !preg_match('/[A-Z]/',$this->$attribute) || !preg_match('/[0-9]/',$this->$attribute)) {
            $this->addError($attribute, "a-zA-Z0-9 required");
        }
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

    public function beforeSave()
    {
        if ($this->isNewRecord)
            $this->Password = md5($this->Password);
        return true;
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|integer $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['Email' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->Email;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }    

    public static function findByUsername($username)
    {
        return static::findOne(['Email' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->Password == $password;//md5($password);
    }
}
