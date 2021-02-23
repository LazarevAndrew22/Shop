<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\forms\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="search-results-wrapper">
        <div class="btn-search-close">
            <i class="ion-ios-close-empty black"></i>
        </div>
    </div>
    <div class="account-wrapper">
        <ul class="account-tab text-center">
            <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
            <li><a data-toggle="tab" href="#register">Register</a></li>
        </ul>
        <div class="tab-content">
            <div id="login" class="tab-pane fade in active">
                <div class="row">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8 \">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label form-control form-account'],
                        ],
                    ]); ?>
                    <div class="form-group">
                        <label for="loginform-username">Email</label>
                        <?= $form->field($model, 'username')->textInput()->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label for="loginform-password">Password</label>
                        <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                    </div>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-offset-1 col-lg-6\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>

                    <div class="col-md-5">
                        <div class="btn-button-group mg-top-30 mg-bottom-15">
                            <?= Html::submitButton('Sign in', ['class' => 'zoa-btn btn-login hover-white', 'name' => 'login-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                        <div class="social-group-button">
                            <a href="" class="twitter button">
                                <div class="slide">
                                    <p>
                                        Connect with Twitter
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-twitter">
                                    </i>
                                </div>
                            </a>
                            <a href="" class="facebook button">
                                <div class="slide">
                                    <p>
                                        Connect with Facebook
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-facebook">
                                    </i>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!--                        <div class="col-md-4">-->
                    <!--                            <form method="post" class="form-customer form-reset">-->
                    <!--                                <div class="form-group">-->
                    <!--                                    <label for="exampleInputEmail5">E-mail *</label>-->
                    <!--                                    <input type="email" class="form-control form-account" id="exampleInputEmail5">-->
                    <!--                                </div>-->
                    <!--                                <div class="btn-button-group mg-top-30 mg-bottom-15">-->
                    <!--                                    <button type="submit" class="zoa-btn btn-login hover-white">Reset Password</button>-->
                    <!--                                </div>-->
                    <!--                            </form>-->
                    <!--                        </div>-->
                </div>
            </div>
            <div id="register" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <form method="post" class="form-customer form-register">
                            <div class="form-group">
                                <label for="exampleInputEmail7">E-mail *</label>
                                <input type="email" class="form-control form-account" id="exampleInputEmail7">
                            </div>
                            <div class="form-group">
                                <label for="zoaname2">Name</label>
                                <input type="text" class="form-control form-account" id="zoaname2">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Password *</label>
                                <input type="password" class="form-control form-account" id="exampleInputPassword2">
                            </div>
                            <div class="btn-button-group mg-top-30 mg-bottom-15">
                                <button type="submit" class="zoa-btn btn-login hover-white">Sign Up</button>
                            </div>
                        </form>
                        <div class="social-group-button">
                            <a href="" class="twitter button">
                                <div class="slide">
                                    <p>
                                        Connect with Twitter
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-twitter">
                                    </i>
                                </div>
                            </a>
                            <a href="" class="facebook button">
                                <div class="slide">
                                    <p>
                                        Connect with Facebook
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-facebook">
                                    </i>
                                </div>
                            </a>
                        </div>
                        <span class="text-note">Already have an account? <a href="">Sign In!</a></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>