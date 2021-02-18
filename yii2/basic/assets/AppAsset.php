<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use yii\bootstrap\BootstrapAsset;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/_bootstrap.css',
        'css/bootstrap.css',
        'css/font-awesome.min.css',
        'css/ionicons.min.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/Pe-icon-7-stroke.min.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/styles.css',
        'css/zoa-font.css',


    ];
    public $js = [
        'js/bootstrap.js',
        'js/countdown.js',
        'js/jquery.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/slick.min.js',
        'js/jquery.easing.js',
        'js/jquery.scrollTo.js',
        'js/script.js',

    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
