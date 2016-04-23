 <?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;
use yii\helpers\Url;
//$this->registerCssFile('/yii2.0.7/advanced/frontend/web/statics/css/test2.css',['depends'=>'backend\assets\AppAsset']);
$this->title = '视频列表';
$this->params['breadcrumbs'][] = ['label' => '课程分类', 'url' => ['video']];
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="row">
    <div class="col-lg-9">
        <div class="panel">
    <div class="panel-title box-title">
        <span>视频列表</span>
            </div>
    <div class="panel-content">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr><th style="width: 8%;text-align:center;">选集</th><th>视频名称</th><th>更新时间</th><th>状态</th></tr>
                                                <tr>
                    <td style="width: 8%;text-align:center;">1</td>
                    <td><a href="<?php echo Url::toRoute('site/play');?>">视频教程：第一讲-Yii2-高级版项目搭建</a></td>
                    <td>2016-03-01 16:08:36</td>
                                        <td><span class="label label-success" role="button">免费视频</span></td>
                                    </tr>
                                <tr>
                    <td style="width: 8%;text-align:center;">2</td>
                    <td><a href="/video/play/2.html">视频教程：第二讲-Yii2-高级版项目搭建</a></td>
                    <td>2016-03-09 16:08:44</td>
                                        <td><span class="label label-success" role="button">免费视频</span></td>
                                    </tr>
                                <tr>
                    <td style="width: 8%;text-align:center;">3</td>
                    <td><a href="/video/play/3.html">视频教程：第三讲-Yii2-高级版项目搭建</a></td>
                    <td>2016-03-17 16:08:47</td>
                                        <td><span class="label label-success" role="button">免费视频</span></td>
                                    </tr>
                                <tr>
                    <td style="width: 8%;text-align:center;">4</td>
                    <td><a href="/video/play/4.html">视频教程：第四讲-Yii2-高级版项目搭建</a></td>
                    <td>2016-03-17 16:08:50</td>
                                        <td><span class="label label-success" role="button">免费视频</span></td>
                                    </tr>
                                <tr>
                    <td style="width: 8%;text-align:center;">5</td>
                    <td><a href="/video/play/5.html">视频教程：第五讲-Yii2-高级版登录注册</a></td>
                    <td>2016-03-24 16:08:53</td>
                                        <td><span class="label label-success" role="button">免费视频</span></td>
                                    </tr>
                                <tr>
                    <td style="width: 8%;text-align:center;">6</td>
                    <td><a href="/video/play/6.html">视频教程：第六讲-Yii2-发送邮件配置</a></td>
                    <td>2016-03-21 16:08:56</td>
                                        <td><span class="label label-success" role="button">免费视频</span></td>
                                    </tr>
                         
            </tbody>
        </table>
    </div>
        <div class="page"></div>
    </div>

        </div>
    <div class="col-lg-3">
        <div class="panel-title box-title">
            <span>视频简介</span>
        </div>
        <div class="video-intro">
             <p>Yii2.0高级版框架的搭建：登录注册、语言包配置、数据库、静态资源搭建、发送邮件等基础功能解说演示。</p>                    
        </div>
    </div>    
</div>    </div>
</div>
?>