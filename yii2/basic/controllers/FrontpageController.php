<?php


namespace app\controllers;

use Yii;
use app\components\web\SecuredController;

class FrontpageController extends SecuredController
{
    public function actionIndex(): string
    {
        $this->view->title = Yii::t('app', 'Frontpage');
        return $this->render('index');
    }
}