<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\view;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
//注册js
$this->registerJs('jQuery(document).ready(function(){App.init();});',View::POS_END);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class ="page-header-fixed">
<!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse navbar-fixed-top">

            <!-- BEGIN TOP NAVIGATION BAR -->

            <div class="navbar-inner">

                <div class="container-fluid">

                    <!-- BEGIN LOGO -->

                    <a class="brand" href="index.html">
                        
                    <img src="statics/image/logo.png" alt="logo">

                    </a>

                    <!-- END LOGO -->

                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

                    <img src="statics/image/menu-toggler.png" alt="">

                    </a>          

                    <!-- END RESPONSIVE MENU TOGGLER -->            

                    <!-- BEGIN TOP NAVIGATION MENU -->              

                    <ul class="nav pull-right">

                        <!-- BEGIN NOTIFICATION DROPDOWN -->   

                        <li class="dropdown" id="header_notification_bar">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="icon-warning-sign"></i>

                            <span class="badge">6</span>

                            </a>

                            <ul class="dropdown-menu extended notification">

                                <li>

                                    <p>你有14条通知</p>

                                </li>

                                <li>

                                    <a href="#">

                                    <span class="label label-success"><i class="icon-plus"></i></span>

                                   新用户注册 

                                    <span class="time">刚刚</span>

                                    </a>

                                </li>

                                

                                <li class="external">

                                    <a href="#">查看全部信息 <i class="m-icon-swapright"></i></a>

                                </li>

                            </ul>

                        </li>

                        <!-- END NOTIFICATION DROPDOWN -->

                        <!-- BEGIN INBOX DROPDOWN -->

                        <li class="dropdown" id="header_inbox_bar">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="icon-envelope"></i>

                            <span class="badge">5</span>

                            </a>

                            <ul class="dropdown-menu extended inbox">

                                <li>

                                    <p>你有12条新闻</p>

                                </li>

                                <li>

                                    <a href="inbox.html?a=view">

                                    <span class="photo"><img src="statics/image/avatar2.jpg" alt=""></span>

                                    <span class="subject">

                                    <span class="from">Lisa Wong</span>

                                    <span class="time">Just Now</span>

                                    </span>

                                    <span class="message">

                                    Vivamus sed auctor nibh congue nibh. auctor nibh

                                    auctor nibh...

                                    </span>  

                                    </a>

                                </li>
                                <li class="external">

                                    <a href="inbox.html">看更多信息 <i class="m-icon-swapright"></i></a>

                                </li>

                            </ul>

                        </li>

                        <!-- END INBOX DROPDOWN -->

                        <!-- BEGIN TODO DROPDOWN -->

                        <li class="dropdown" id="header_task_bar">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="icon-tasks"></i>

                            <span class="badge">5</span>

                            </a>

                            <ul class="dropdown-menu extended tasks">

                                
                                <li>

                                    <a href="#">

                                    <span class="task">

                                    <span class="desc">Mobile development</span>

                                    <span class="percent">85%</span>

                                    </span>

                                    <span class="progress progress-success">

                                    <span style="width: 85%;" class="bar"></span>

                                    </span>

                                    </a>

                                </li>

                                <li class="external">

                                    <a href="#">See all tasks <i class="m-icon-swapright"></i></a>

                                </li>

                            </ul>

                        </li>

                        <!-- END TODO DROPDOWN -->

                        <!-- BEGIN USER LOGIN DROPDOWN -->

                        <li class="dropdown user">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <img alt="" src="statics/image/avatar1_small.jpg">

                            <span class="username" user-id="<?=Yii::$app->user->identity->id?>"><?=Yii::$app->user->identity->username?></span>

                            <i class="icon-angle-down"></i>

                            </a>

                            <ul class="dropdown-menu">

                                <li><a href="extra_profile.html"><i class="icon-user"></i>个人中心</a></li>

                                <li><a href="page_calendar.html"><i class="icon-calendar"></i> 我的日历</a></li>

                                <li><a href="inbox.html"><i class="icon-envelope"></i> 我的消息</a></li>

                                <li><a href="#"><i class="icon-tasks"></i> 我的任务</a></li>

                                <li class="divider"></li>

                                <li><a href="extra_lock.html"><i class="icon-lock"></i> 锁屏</a></li>

                                <li><a href="<?=Url::to(['site/logout'])?>" data-method="post"><i class="icon-key"></i>退出</a></li>
                            </ul>

                        </li>

                        <!-- END USER LOGIN DROPDOWN -->

                    </ul>

                    <!-- END TOP NAVIGATION MENU --> 

                </div>

            </div>

            <!-- END TOP NAVIGATION BAR -->

    </div>
<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
  <div class="page-container row-fluid">

        <!-- BEGIN SIDEBAR -->

        <div class="page-sidebar nav-collapse collapse">

            <!-- BEGIN SIDEBAR MENU -->        

            <ul class="page-sidebar-menu">

                <li>

                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                    <div class="sidebar-toggler hidden-phone"></div>

                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                </li>

                <li>

                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

                    <form class="sidebar-search">

                        <div class="input-box">

                            <a href="javascript:;" class="remove"></a>

                            <input type="text" placeholder="Search...">

                            <input type="button" class="submit" value=" ">

                        </div>

                    </form>

                    <!-- END RESPONSIVE QUICK SEARCH FORM -->

                </li>

                <li class="start ">

                    <a href="<?=Url::to(['site/index'])?>">

                    <i class="icon-home"></i> 

                    <span class="title">系统首页</span>

                    </a>

                </li>

       

                <li class="">

                    <a href="javascript:;">

                    <i class="icon-bookmark-empty"></i> 

                    <span class="title">视频管理</span>

                    <span class="arrow"></span>

                    </a>

                    <ul class="sub-menu" style="display: none;">

                        <li>

                            <a href="<?=Url::to(['video/create'])?>">

                            更新视频</a>

                        </li>

                       
                       
                        <li>

                            <a href="<?=Url::to(['video/index'])?>">

                            呵呵</a>

                        </li>

                        <li>

                            <a href="ui_sliders.html">

                            哈哈</a>

                        </li>
                        <li>

                            <a href="ui_nestable.html">

                            嘿嘿</a>

                        </li>

                    </ul>

                </li>

  


                <li class="">

                    <a href="javascript:;">

                    <i class="icon-user"></i> 

                    <span class="title">用户管理</span>

                    <span class="arrow "></span>

                    </a>

                    <ul class="sub-menu">

                        <li>

                            <a href="login.html">

                            Login Form 1</a>

                        </li>

                        <li>

                            <a href="login_soft.html">

                            Login Form 2</a>

                        </li>

                    </ul>

                </li>
            </ul>

            <!-- END SIDEBAR MENU -->

        </div>

        <!-- END SIDEBAR -->

        <!-- BEGIN PAGE -->

        <div class="page-content" style="min-height:998px !important">

            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <div id="portlet-config" class="modal hide">

                <div class="modal-header">

                    <button data-dismiss="modal" class="close" type="button"></button>

                    <h3>portlet Settings</h3>

                </div>

                <div class="modal-body">

                    <p>Here will be a configuration form</p>

                </div>

            </div>

            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <!-- BEGIN PAGE CONTAINER-->

            <div class="container-fluid">

                <!-- BEGIN PAGE HEADER-->

                <div class="row-fluid">

                    <div class="span12">

                        <!-- BEGIN STYLE CUSTOMIZER -->

                        <div class="color-panel hidden-phone">

                            <div class="color-mode-icons icon-color"></div>

                            <div class="color-mode-icons icon-color-close"></div>

                            <div class="color-mode">

                                <p>THEME COLOR</p>

                                <ul class="inline">

                                    <li class="color-black current color-default" data-style="default"></li>

                                    <li class="color-blue" data-style="blue"></li>

                                    <li class="color-brown" data-style="brown"></li>

                                    <li class="color-purple" data-style="purple"></li>

                                    <li class="color-grey" data-style="grey"></li>

                                    <li class="color-white color-light" data-style="light"></li>

                                </ul>

                                <label>

                                    <span>Layout</span>

                                    <select class="layout-option m-wrap small">

                                        <option value="fluid" selected="">Fluid</option>

                                        <option value="boxed">Boxed</option>

                                    </select>

                                </label>

                                <label>

                                    <span>Header</span>

                                    <select class="header-option m-wrap small">

                                        <option value="fixed" selected="">Fixed</option>

                                        <option value="default">Default</option>

                                    </select>

                                </label>

                                <label>

                                    <span>Sidebar</span>

                                    <select class="sidebar-option m-wrap small">

                                        <option value="fixed">Fixed</option>

                                        <option value="default" selected="">Default</option>

                                    </select>

                                </label>

                                <label>

                                    <span>Footer</span>

                                    <select class="footer-option m-wrap small">

                                        <option value="fixed">Fixed</option>

                                        <option value="default" selected="">Default</option>

                                    </select>

                                </label>

                            </div>

                        </div>

                        <!-- END BEGIN STYLE CUSTOMIZER --> 

                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                        <h3 class="page-title">

                            系统首页

                        </h3>

                        <ul class="breadcrumb">
                            <?= Breadcrumbs::widget([
                            'itemTemplate' => "<li><i>{link}</i></li>\n >\n ",
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                          
                        </ul>

                        <!-- END PAGE TITLE & BREADCRUMB-->

                    </div>

                </div>
                

                <!-- END PAGE HEADER-->

                <!-- BEGIN PAGE CONTENT-->

                <div class="row-fluid">

                    <div class="span12">

                        <?=$content?>

                    </div>

                </div>

                <!-- END PAGE CONTENT-->

            </div>

            <!-- END PAGE CONTAINER--> 

        </div>

        <!-- END PAGE -->    

    </div>


<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="footer">

        <div class="footer-inner">

            版权：刘海军毕业设计

        </div>

        <div class="footer-tools">

            <span class="go-top">

            <i class="icon-angle-up"></i>

            </span>

        </div>

</div>
<!-- END FOOTER -->
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
