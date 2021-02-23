<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $password
 * @property int $is_active
 * @property string $created_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['firstName', 'lastName', 'email', 'password'], 'required'],
            [['is_active'], 'integer'],
            [['created_at'], 'safe'],
            [['firstName', 'lastName', 'email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
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
