<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\attributelables;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请写下一下信息进行登录:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model1, 'username')->textInput(['autofocus' => true])->label('用户名') ?>

                <?= $form->field($model1, 'password')->passwordInput()->label('密码') ?>

                <?= $form->field($model1, 'rememberMe')->checkbox()->label('记住密码') ?>

                <div style="color:#999;margin:1em 0">
                    忘记密码 <?= Html::a('重置密码', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
