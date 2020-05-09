<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2019-05-11 22:26
 */

namespace api\models\form;

use Yii;
use api\models\User;
use common\components\Common;

class SignupForm extends \yii\base\Model
{
    public $mobile;

    public $password;

    public function rules()
    {
        return [
            ['mobile', 'filter', 'filter' => 'trim'],
            ['mobile', 'required'],
            ['mobile', 'string', 'max' => 255],
            [
                'mobile',
                'unique',
                'targetClass' => User::className(),
                'message' => Yii::t('app', 'This mobile has already been taken')
            ],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
        ];
    }

    public function signup()
    {
        if (! $this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = '游客'.Common::generate_username();
        $user->mobile = $this->mobile;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateAccessToken();
        return $user->save() ? $user : null;
    }
}