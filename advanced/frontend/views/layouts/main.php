<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php

    NavBar::begin([
        'brandLabel' =>Yii::t('common','DABAI-HUB'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItemsLeft = [
        ['label' => '首页', 'url' => ['/site/index']],
        ['label' => '关于我们', 'url' => ['/site/about']],
        ['label' => '联系我们', 'url' => ['/site/contact']],
        ['label' => '课程分类', 'url' => ['/site/video']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItemsRight[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItemsRight[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        // $menuItems[] = '<li>'
        //     . Html::beginForm(['/site/logout'], 'post')
        //     . Html::submitButton(
        //         '(' . Yii::$app->user->identity->username . ')',
        //         ['class' => 'btn btn-link']
        //     )
        //     'label'=>[('.Yii::$app->user->identity->username.')],
        //     'items' => [
        //         ['label'=>'<i class = "icon-signout"></i>退出','url'=>['/site/logout'],'linkOptions'=>['data-method'=>'post']],
        //     ],
        //     'url' =>['/site/logout'],
        //     'linkOption' =>['data-method'=>'post']
        //     . Html::endForm()
        //     . '</li>';
        $menuItemsRight[]=[

            'label'=> Yii::$app->user->identity->username,

            'items' => [

                [

                    'label' => '<i class = "icon-signout"></i>退出',

                    'url' => ['/site/logout'],

                    'linkOptions' => ['data-method'=>'post'],

                ],

            ],

        ];
    }
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'encodelabels' => false,
    //     'items' => $menuItems,
    // ]);
    echo Nav::widget([

            'options'=> ['class' => 'navbar-nav navbar-left'],

            'encodeLabels' => false,//关闭HTML转码

            'items'=> $menuItemsLeft,

    ]);
    echo Nav::widget([

            'options'=> ['class' => 'navbar-nav navbar-right'],

            'encodeLabels' => false,//关闭HTML转码

            'items'=> $menuItemsRight,

    ]);
    NavBar::end();

    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; mr_liu <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
