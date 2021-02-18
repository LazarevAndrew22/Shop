<?php


use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\web\View;
use app\models\forms\RegistrationForm;


/**
 * @var RegistrationForm $model
 * @var View $this
 */


$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <p>Please fill out the following fields to register:</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'firstName')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'lastName')->textInput() ?>
            <?= $form->field($model, 'email')->textInput() ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'repeatPassword')->passwordInput() ?>
            <?= HTML::submitButton('Registration', ['class' => 'btn btn-success']) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
