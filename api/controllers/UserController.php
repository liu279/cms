<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2017-08-30 18:10
 */
namespace api\controllers;

use api\models\User;
use common\components\Controller;
use common\components\Error;
use common\services\UserService;

/**
 * Class UserController
 * @package api\controllers*
 */
class UserController extends Controller
{

    /**
     * 登录
     *
     * POST /login
     * {"mobile":"xxx", "password":"xxxxxx"}
     *
     * @return array
     */
    public function actionLogin()
    {
        $check = User::findByMobile($this->post['mobile']);
        $UserService = new UserService();
        if ($check) {
            return $UserService->Login($this->post);
        } else {
            return $UserService->Register($this->post);
        }
    }

    /**
     * 登出
     *
     * POST /login-out
     *
     * @return array
     */
    public function actionLogout() {
        if (empty($this->user)) {
            return $this->error(Error::USER_NO_ACCESS,$this->message('No Permission.'));
        } else {
            $user = User::findOne($this->user['id']);
            $user->generateAccessToken();
            if ($user->save()) {
                return $this->output();
            } else {
                return $this->error(Error::INTERNAL_ERROR);
            }
        }
    }

    /**
     * 设置头像
     *
     * @return array
     */
    public function actionSetAvatar()
    {
        $this->checkUser();
        if (empty($this->post['file'])) {
            return $this->error(Error::PARAMETER_ERROR, 'file参数为空');
        }
        $this->uploadFile(TRUE);
        $user = User::findOne($this->user['id']);
        $user->avatar = $this->post['IMG_UPLOAD_THUMB_NAME'];
        if (!$user->save()) {
            return $this->error(Error::INTERNAL_ERROR, '', $user->getErrors());
        }

        if($this->device == 0){
            return $this->output($user->avatar);
        }
        return $this->output($this->staticdomain . $user->avatar);
    }

    /**
     * 设置封面
     * @return array
     */
    public function actionSetCover()
    {
        $this->checkUser();
        if (empty($this->post['file'])) {
            return $this->error(Error::PARAMETER_ERROR, 'file参数为空');
        }
        $this->uploadFile(TRUE);
        $user = User::findOne($this->user['id']);
        $user->cover = $this->post['IMG_UPLOAD_NAME'];
        //$user->thumb_avatar = '';
        if (!$user->save()) {
            return $this->error(Error::INTERNAL_ERROR, '', $user->getErrors());
        }

        if($this->device == 0){
            return $this->output($user->avatar);
        }
        return $this->output($this->staticdomain . $user->avatar);
    }

    /**
     * 实名认证
     *
     * POST /real-verify
     *
     * {"realName":"xxx", "idNum":"xxxxxx", "file"}
     *
     */
    public function actionRealVerify()
    {
        $this->checkUser();
        if (empty($this->post['file'])) {
            return $this->error(Error::PARAMETER_ERROR, 'file参数为空');
        }
        $this->uploadFile(TRUE);
        $user = User::findOne($this->user['id']);
        $user->setScenario('verify');
        $user->realName = $this->post['realName'];
        $user->idNum = $this->post['idNum'];
        $user->idImage = $this->post['IMG_UPLOAD_NAME'];
        if($user->validate() && $user->save()){
            return $this->output();
        }
        $error = $user->getErrors();
        return $this->error(Error::PARAMETER_LAKE, reset($error)[0]);
    }


    /**
     * 查看个人信息
     */
    public function actionUserInfo()
    {
        $this->checkUser();
        $user_info = $this->user;
        unset($user_info['device_token'],$user_info['device_type'],$user_info['created_at'],$user_info['updated_at']);
        return $this->output($user_info);
    }
}
