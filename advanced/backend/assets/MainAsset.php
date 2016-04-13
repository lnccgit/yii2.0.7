<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/blog';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/bootstrap-responsive.min.css',
        'css/font-awesome.min.css',
        'css/style-metro.css',
        'css/style.css',
        'css/style-responsive.css',
        'css/default.css',
        'css/uniform.default.css',
    ];
    public $js = [
        'js/jquery-1.10.1.min.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/jquery-ui-1.10.1.custom.min.js',
        'js/bootstrap.min.js',
        'js/jquery.slimscroll.min.js',
        'js/jquery.blockui.min.js',
        'js/jquery.cookie.min.js',
        'js/jquery.uniform.min.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
