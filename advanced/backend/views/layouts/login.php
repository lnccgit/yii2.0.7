<?php
use yii\helpers\Html;
use backend\assets\AppAsset;
use yii\web\view;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
//注册css文件
$this->registerCssFile('/yii2.0.7/advanced/backend/web/statics/css/login.css',['depends'=>'backend\assets\AppAsset']);

//注册js
$this->registerJs('jQuery(document).ready(function(){App.init();});',View::POS_END);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/favicon.ico"/>
</head>
<body class = "login">
<?php $this->beginBody()?>
	<div class="logo">
		<img src="../statics/image/logo-big.png" alt="">
	</div>

	<div class="content">
	<?=$content?>
	</div>

	<div class="copyright">
	版权：刘海军毕业设计
	</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

