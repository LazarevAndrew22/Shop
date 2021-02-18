<?php

namespace app\models\entities;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $password
 * @property bool $is_active
 * @property string $created_at
 */
class Users extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName():string
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules():array
    {
        return [
            [['firstName', 'lastName', 'email', 'password'], 'required'],
            [['is_active'], 'boolean'],
            [['created_at'], 'safe'],
            [['firstName', 'lastName', 'email'], 'string', 'min' => 3, 'max' => 100],
            [['password'], 'string', 'min'=> 8, 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels():array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstName' => Yii::t('app', 'First Name'),
            'lastName' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'is_active' => Yii::t('app', 'Is Active'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
