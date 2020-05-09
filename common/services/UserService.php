<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2020-01-29 16:54
 */

namespace common\services;


use api\models\form\LoginForm;
use api\models\form\SignupForm;
use backend\models\search\UserSearch;
use common\components\Common;
use common\models\User;
use yii\web\IdentityInterface;

class UserService extends Service implements UserServiceInterface
{

    public function getSearchModel(array $options = [])
    {
        return new UserSearch();
    }

    public function getModel($id, array $options = [])
    {
        $model = User::findOne($id);
        if( isset($options['scenario']) && !empty($options['scenario']) ){
            if($model !== null) {
                $model->setScenario($options['scenario']);
            }
        }
        return $model;
    }

    public function newModel(array $options = [])
    {
        $model = new User();
        $model->loadDefaultValues();
        isset($options['scenario']) && $model->setScenario($options['scenario']);
        return $model;
    }

    public function create(array $postData, array $options = [])
    {
        $model = $this->newModel($options);
        if( $model->load($postData) ){
            $model->generateAuthKey();
            $model->setPassword($model->password);
            if( $model->save() ) {
                return true;
            }
        }
        return $model;
    }

    public function getUserCountByPeriod($startAt=null, $endAt=null)
    {
        $model = User::find();
        if( $startAt != null && $endAt != null ){
            $model->andWhere(["between", "created_at", $startAt, $endAt]);
        }else if ($startAt != null){
            $model->andwhere([">", "created_at", $startAt]);
        } else if($endAt != null){
            $model->andWhere(["<", "created_at", $endAt]);
        }
        return $model->count('id');
    }

    public function Login($post) {
        $loginForm = new LoginForm();
        $loginForm->setAttributes( $post );

        if ($user = $loginForm->login()) {
            if ($user instanceof IdentityInterface) {
                return Common::output([
                    'id' => $user->id,
                    'username' => $user->username,
                    'avatar' => $user->avatar,
                    'autonym' => $user->autonym,
                    'accessToken' => $user->access_token,
                    'expiredAt' => \Yii::$app->params['user.apiTokenExpire'] + time()
                ]);
            } else {
                $err = $user->errors;
                return Common::error(203, reset($err)[0]);
            }
        } else {
            $err = $loginForm->errors;
            return Common::error(203, reset($err)[0]);
        }
    }

    public function Register($post) {
        $signupForm = new SignupForm();
        $signupForm->setAttributes( $post );
        if( ($user = $signupForm->signup()) instanceof \common\models\User){
            return Common::output([
                'id' => $user->id,
                'username' => $user->username,
                'avatar' => $user->avatar,
                'autonym' => $user->autonym,
                'accessToken' => $user->access_token,
                'expiredAt' => \Yii::$app->params['user.apiTokenExpire'] + time()
            ]);
        }else{
            $err = $signupForm->errors;
            return Common::error(203, reset($err)[0]);
        }
    }


}