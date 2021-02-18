<?php


namespace app\models\forms;


use app\models\entities\Users;
use Yii;

class RegistrationForm extends Users
{
    public string $repeatPassword = '';

    public function rules(): array
    {
        return array_merge(
            parent::rules(),
            [
                [['repeatPassword'], 'required'],
                [['repeatPassword'], 'compare', 'compareAttribute' => 'password'],
            ]
        );
    }

    public function beforeSave($insert): bool
    {
        $isOk = parent::beforeSave($insert);
        if ($isOk) {
            $this->password = Yii::$app->security->generatePasswordHash($this->password);
        }

        return $isOk;
    }
}