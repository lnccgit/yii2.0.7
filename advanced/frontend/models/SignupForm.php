<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use yii;
use yii\captcha\Captcha;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repassword;
    public $verifycode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '该用户名已经被使用'],
            ['username', 'string', 'min' => 6, 'max' => 16],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '该邮箱已经被注册'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['repassword','compare','compareAttribute'=>'password','message'=>'两次密码不一致'],

            ['verifycode','captcha'],
        ];
    }
    public function attributelabels()
    {
        return [
            'username'=>'用户名',
            'email'=>'邮箱',
            'password'=>'密码',
            'repassword'=>'重复密码',
            'verifycode'=>'验证码',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
