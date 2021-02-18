<?php

/* @var $this View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>


<!-- Footer -->
<footer class="footer v2">
    <div class="container">
        <div class="f-content">
            <div class="f-col hidden-xs hidden-sm">
                <a href="">
                    <img src="yii2/basic/web/img/f-logo.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="f-col align-items-center">
                <p>© 2018 <a class="red" href="">Zoa.</a></p>
                <ul>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms of Use</a></li>
                </ul>
            </div>
            <div class="f-col">
                <div class="social">
                    <a href=""><i class="fa fa-rss"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>