<?php
namespace common\components;

use Yii;
use api\models\User as userModel;

class User extends \yii\web\User
{
    public $user;
    /**
     * Initializes the application component.
     */
    public function init()
    {
        try {
            parent::init();
            $secretkey = isset(Yii::$app->getRequest()->getHeaders()['x-api-key'])
                ? Yii::$app->getRequest()->getHeaders()['x-api-key']
                : '';

            $this->user = userModel::findIdentityByAccessToken($secretkey);
        } catch (\Exception $exception) {
            return ['code' => 203, 'message' => $exception->getMessage()];
        }
    }

    /**
     * Returns a value indicating whether the user is a guest (not authenticated).
     * @return boolean whether the current user is a guest.
     * @see getIdentity()
     */
    public function getIsGuest()
    {
        return empty($this->user['id']);
    }
    
    public function getUserInstance()
    {
        return $this->user;
    }
    
    public function __get($name)
    {
        $getter = 'get' . $name;
        if (method_exists($this, $getter)) {
            // read property, e.g. getName()
            return $this->$getter();
        } else {
            if(isset($this->user[$name])){
                return $this->user[$name];
            }
        }
    }	
}