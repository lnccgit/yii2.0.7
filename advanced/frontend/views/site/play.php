<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->registerJsFile('/yii2.0.7/advanced/frontend/web/statics/video.min.js');
$this->registerCssFile('/yii2.0.7/advanced/frontend/web/statics/css/video-js.min.css',['depends'=>'backend\assets\AppAsset']);
$this->title='第一节';
$this->params['breadcrumbs'][] = ['label' => '课程分类', 'url' => ['video']];
$this->params['breadcrumbs'][] = ['label' => '课程列表', 'url' => ['vide']];
$this->params['breadcrumbs'][] = $this->title;
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<!-- <link href="css/video-js.min.css" rel="stylesheet"> -->
<!-- <script src="js/video.min.js"></script> -->
<script>
    videojs.options.flash.swf = "video-js.swf";
</script>
</head>

<body>
	<?php echo "<br>";?>
	 <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="464"
	      poster="/yii2.0.7/advanced/frontend/web/statics/image/b.png"
	      data-setup="{}">
	<source src="http://localhost/b.mp4" type='video/mp4' />
	
	<?php echo "6666";?>
</body>
</html>
