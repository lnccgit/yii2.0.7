<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile('/yii2.0.7/advanced/frontend/web/statics/css/test2.css',['depends'=>'backend\assets\AppAsset']);
$this->title = '课程分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="main">

    <div class="container">
        <div class="course-content">
            <div class="course-nav-box">
                <div class="course-nav-hd">
                    <span>全部课程</span>
                    <a href="/about/recruit" class="for-teacher hide-text" title="应聘讲师" target="_blank">应聘讲师</a>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">方向：</span>
                    <div class="bd">
                        <ul class="">
                            <li class="course-nav-item on">
                                <a href="/course/list">全部</a>
                            </li>
                      		<li class="course-nav-item">
                                <a href="/course/list?c=fe" data-ct="fe">前端开发</a>
                            </li>
      						<li class="course-nav-item ">
                               	<a href="/course/list?c=be" data-ct="be">后端开发</a>
                            </li>
                            <li class="course-nav-item">
                                <a href="/course/list?c=mobile" data-ct="mobile">移动开发</a>
                            </li>
                            <li class="course-nav-item">
                                <a href="/course/list?c=data" data-ct="data">数据处理</a>
                            </li>
                            <li class="course-nav-item">
                                <a href="/course/list?c=photo" data-ct="photo">图像处理</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">分类：</span>
                    <div class="bd">
                        <ul class="">
                                <li class="course-nav-item on">
                                <a href="/course/list?c=">全部</a>
                           		</li>
                                <li class="course-nav-item ">
                                <a href="/course/list?c=javascript" data-id=44 data-ct=fe>JavaScript</a>
                                </li>                                                                                                                                                                                                  
                                 <li class="course-nav-item ">
                                            <a href="/course/list?c=CSS3" data-id=1262 data-ct=fe>CSS3</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=html5" data-id=221 data-ct=fe>Html5</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=jquery" data-id=219 data-ct=fe>jQuery</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=angularjs" data-id=1123 data-ct=fe>AngularJS</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=nodejs" data-id=222 data-ct=fe>Node.js</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=bootstrap" data-id=1263 data-ct=fe>Bootstrap</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=webapp" data-id=1260 data-ct=fe>WebApp</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=fetool" data-id=1261 data-ct=fe>前端工具</a>
                                        </li>
                                           <a href="/course/list?c=php" data-id=1 data-ct=be>PHP</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=java" data-id=220 data-ct=be>JAVA</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=linux" data-id=468 data-ct=be>Linux</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=python" data-id=1118 data-ct=be>Python</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=C" data-id=1273 data-ct=be>C</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=C+puls+puls" data-id=1331 data-ct=be>C++</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=Go" data-id=1358 data-ct=be>Go</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=C%23" data-id=1362 data-ct=be>C#</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=data+structure" data-id=1370 data-ct=be>数据结构</a>
                                        </li>                                                                
                                        <li class="course-nav-item ">
                                         <a href="/course/list?c=android" data-id=223 data-ct=mobile>Android</a>
                                        </li>
                                        <li class="course-nav-item ">
                                            <a href="/course/list?c=ios" data-id=955 data-ct=mobile>iOS</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=Unity+3D" data-id=1281 data-ct=mobile>Unity 3D</a>
                                        </li>
                                                                                <li class="course-nav-item ">
                                            <a href="/course/list?c=Cocos2d-x" data-id=1361 data-ct=mobile>Cocos2d-x</a>
                                        </li> 
                                           <a href="/course/list?c=mysql" data-id=952 data-ct=data>MySQL</a>
                                        </li>
                                                               
                                                                                <li class="course-nav-item ">
                                                                                                                                    
                                        <li class="course-nav-item ">
                                          
                                                                                                                                                                                                                                <li class="em "
                                                                                                                                                                </ul>
         </div>
                </div>
            
            <div class="course-tool-bar clearfix">
                <div class="tool-left l">
                        <a href="/course/list?sort=last" class="sort-item active">最新</a>
                        <a href="/course/list?sort=pop" class="sort-item">最热</a>
                </div>
                <div class="l">
                    <span class="tool-item" style="display: none;">
                        <a class="follow-learn tool-chk" href="javascript:void(0);">跟我学</a>
                    </span>
                </div>
                <div class="tool-right r">
                                            <span class="tool-item">
                                                                                        
                                                                                                                                                                      </a>
                        </span>
                                        <span class="tool-item total-num">
                        共<b>523</b>个课程
                    </span>
                    <span class="tool-item tool-pager">
                                                <span class="pager-num">
                            <b class="pager-cur">1</b>/<em class="pager-total">27</em>
                        </span>
                                                <a href="javascript:void(0)" class="pager-action pager-prev hide-text disabled">上一页</a>
                        
                                                <a href="/course/list?page=2" class="pager-action pager-next hide-text">下一页</a>
                                            </span>
                </div>
            </div>
            <div class="course-list">
                <div class="js-course-lists">
                    <ul>
                                            
                            
        
                                                        <li class="course-one">
                            <a href="<?php echo Url::toRoute('site/vide');?>" target="_self">
                        <div class="course-list-img">
                <img width="240" height="135" alt="SpringMVC数据绑定入门" src="http://img.mukewang.com/5668e3a70001c90006000338-240-135.jpg">
                        </div>
            <h5>
                <span>SpringMVC数据绑定入门</span>
            </h5>
            <div class="tips">
                <p class="text-ellipsis">Geely带你认识SpringMVC各种数据绑定</p>
                                    <span class="l update-latest">更新完毕</span>
                                                
                <span class="l ml20">
                                438
                                人学习</span>
            </div>
            <span class="time-label">
                                    1小时36分钟 | 高级
                            </span>
            <b class="follow-label">跟我学</b>
            </a>
        </li>
                                        <li class="course-one">
                            <a href="/view/623" target="_self">
                        <div class="course-list-img">
                <img width="240" height="135" alt="PHP第三方登录—微博登录" src="http://img.mukewang.com/56e1321f0001550c06000338-240-135.jpg">
                        </div>
            <h5>
                <span>PHP第三方登录—微博登录</span>
            </h5>
            <div class="tips">
                <p class="text-ellipsis">使用微博官方SDK快速接入微博登录。</p>
                                    <span class="l ">更新至4-1</span>
                                                
                <span class="l ml20">
                                1177
                                人学习</span>
            </div>
            <span class="time-label">
                                    55分钟 | 高级
                            </span>
            <b class="follow-label">跟我学</b>
            </a>
        </li>
                                        <li class="course-one">
                            <a href="/view/622" target="_self">
                        <div class="course-list-img">
                <img width="240" height="135" alt="最新Openstack技术和实战" src="http://img.mukewang.com/56dd41cf0001599506000338-240-135.jpg">
                        </div>
            <h5>
                <span>最新Openstack技术和实战</span>
            </h5>
            <div class="tips">
                <p class="text-ellipsis">最新Openstack技术和实战</p>
                                    <span class="l ">更新完毕</span>
                                                
                <span class="l ml20">
                                1254
                                人学习</span>
            </div>
            <span class="time-label">
                                    2小时31分钟 | 高级
                            </span>
            <b class="follow-label">跟我学</b>
            </a>
        </li>
                                        <li class="course-one">
                            <a href="/view/643" target="_self">
                        <div class="course-list-img">
                <img width="240" height="135" alt="CSS深入理解之z-index" src="http://img.mukewang.com/56fb2f5c00013edf06000338-240-135.jpg">
                        </div>
            <h5>
                <span>CSS深入理解之z-index</span>
            </h5>
            <div class="tips">
                <p class="text-ellipsis">CSS技术大牛深入理解系列又一力作！</p>
                                    <span class="l ">更新至8-1</span>
                                                
                <span class="l ml20">
                                2878
                                人学习</span>
            </div>
            <span class="time-label">
                                    1小时9分钟 | 高级
                            </span>
            <b class="follow-label">跟我学</b>
            </a>
        </li>
                                  
                                                      </ul>
                </div>
                <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active">1</a><a href="/course/list?page=2">2</a><a href="/course/list?page=3">3</a><a href="/course/list?page=4">4</a><a href="/course/list?page=5">5</a><a href="/course/list?page=6">6</a><a href="/course/list?page=7">7</a><a href="/course/list?page=2">下一页</a><a href="/course/list?page=27">尾页</a></div>
            </div>
        </div>
    </div>

</div>
