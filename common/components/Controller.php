<?php

namespace common\components;

use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpHeaderAuth;
use yii\filters\auth\QueryParamAuth;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use Yii;
use yii\web\Response;

class Controller extends \yii\rest\Controller
{
    //用来获取用户输入的参数
    protected $post;
    //用户信息（未登录用户为空）
    protected $user;
    protected $time;
    protected $device;

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => [
                //使用ComopositeAuth混合认证
                'class' => HttpHeaderAuth::className(),
                'optional' => [
                    'index',//无需access-token的action
                    'login',
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'info'  => ['GET'],
                ],
            ],
        ]);
    }

    public function init()
    {
        parent::init();
        /*防止跨域*/
        header('Access-Control-Allow-Origin: *');
//        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, x-api-key, Session-Id, Language");
        $this->time = date('Y-m-d H:i:s');
        $this->post = \Yii::$app->request->post() + Yii::$app->request->get(); //临时加入get，方便调试。
        unset($this->post['r']);
        //zh-CN zh-TW en-US
        \Yii::$app->language = isset(Yii::$app->getRequest()->getHeaders()['Language']) ? Yii::$app->getRequest()->getHeaders()['Language'] : 'zh-CN';
        $this->device = isset(Yii::$app->getRequest()->getHeaders()['deviceSystem']) ? Yii::$app->getRequest()->getHeaders()['deviceSystem'] : 0;

        try {
            $this->user = yii::$app->user->user;
        }catch (\Exception $exception){
            $this->end($exception->getMessage());
        }
    }



    protected function message($msg)
    {
        return Common::message($msg);
    }
    protected function error($code, $msg = '', $data = '')
    {
        return Common::error($code, $msg, $data);
    }

    protected function output($data = [], $code = 0)
    {
        return Common::output($data, $code);
    }

    public static function outputFormat($data = [], $format = [])
    {
        return Common::output($data, $format);
    }
    /**
     * 用YII支持的Response输出内容并阻断程序的继续运行。
     * @author xiaxuezhi <xxz291917@163.com>
     * @param  $result
     */
    protected function end($result)
    {
        if ($result instanceof Response) {
            $response = $result;
        } else {
            $response = YII::$app->getResponse();
            if ($result !== null) {
                $response->data = $result;
            }
        }
        $response->send();
        exit;
    }

    /**
     * 统一封装的file_get_contents, 原生的file_get_contents绝对不能使用，没有设置超时时间，如果碰到网络问题，这个进程会一直卡在那边，无情地占用你的网络连接。
     * @author dwer
     *
     * @param  string  $url 请求url
     * @param  integer $timeout 超时时间
     * @param  array   $header 请求头部
     * @return
     */
    static function file_get_contents($url, $timeout = 10, $header = []){
        $url     = strval($url);
        $timeout = intval($timeout);
        $timeout = $timeout <= 0 ? 10 : $timeout;

        $contextOptions = [
            'http' => ['timeout' => $timeout]
        ];
        if($header) {
            $contextOptions['http']['header'] = $header;
        }

        $context = stream_context_create($contextOptions);
        return file_get_contents($url, false, $context);
    }

    public function checkUser() {
        if (yii::$app->user->IsGuest) {
            $this->end($this->error(Error::USER_NO_ACCESS));
        }
//        if(yii::$app->user['status']==2){
//            $this->end($this->error('203',$this->message('Disable Account.')));
//        }
    }



    public function uploadFile($thumbnail =false){
        $this->post['IMG_UPLOAD_NAME'] = '';
        $this->post['IMG_UPLOAD_THUMB_NAME'] ='';
        if (isset($this->post['file']) && !empty($this->post['file'])) {
            $avatarPath = '/uploads/common/' . date('Ymd');
            $filepath = \Yii::$app->basePath . '/web' ;
            if (!file_exists($filepath.$avatarPath)) {
                $sign = mkdir($filepath.$avatarPath);
            }

            $filedata = base64_decode($this->post['file']);

            $md5time = md5(time() . rand());

            $filename = $avatarPath ."/".$md5time . '.jpg';
            file_put_contents($filepath . '/' . $filename, $filedata);
            $thumbname = $avatarPath . $md5time . '_thumb.jpg';
//            $this->post['IMG_UPLOAD_THUMB_NAME'] =$avatarPath . '/' . $thumbname;
            if($thumbnail){
                $this->thumbnail($filepath, $thumbname,$filedata);
            }

            unset($this->post['file']);
            $this->post['IMG_UPLOAD_NAME'] = $filename;
        }
    }



    /*
      二进制数据流生成缩略图
      @$data 二进制图像数据流
      @$mimetype 图像类型
      @$thumbnailHeight 缩略图高度
      @$thumbnailWidth 缩略图宽度
      return 缩略图的二进制数据流

     */

    public function thumbnail($filepath,$filename ,$data, $mimetype = 'image/jpeg', $thumbnailHeight = 200, $thumbnailWidth = 200) {
        if ($mimetype !== 'image/jpeg' &&
            $mimetype !== 'image/pjpeg' &&
            $mimetype !== 'image/gif' &&
            $mimetype !== 'image/png') {
            throw new Exception('Unsupported file type.');
        }

        $ret = '';

        $imageType = substr($mimetype, 6);
        $image = imagecreatefromstring($data);

        $width = imagesx($image);
        $height = imagesy($image);

        // decrease image size if height exceeds thumbnailHeight
        if ($height > $thumbnailHeight) {
            $factor = $thumbnailHeight / $height;
            $targetWidth = round($factor * $width);
            $imageNew = imagecreatetruecolor($targetWidth, $thumbnailHeight);
            imagecopyresampled($imageNew, $image, 0, 0, 0, 0, $targetWidth, $thumbnailHeight, $width, $height);
        }
        // otherwise, check for width
        else if ($width > $thumbnailWidth) {
            $factor = $thumbnailWidth / $width;
            $targetHeight = round($factor * $width);
            $imageNew = imagecreatetruecolor($thumbnailWidth, $targetHeight);
            imagecopyresampled($imageNew, $image, 0, 0, 0, 0, $thumbnailWidth, $targetHeight, $width, $height);
        }
        // if the image is small enough, we take it as-is
        else {

            return $data;
        }

        // store new image data in a variable
        ob_start();

        switch ($imageType) {
            case 'jpeg' : imagejpeg($imageNew, null, 90);
                break;
            case 'pjpeg' : imagejpeg($imageNew, null, 90);
                break;
            case 'gif' : imagegif($imageNew);
                break;
            case 'png' : imagepng($imageNew, null, 2);
                break;
        }

        imagedestroy($imageNew);
        $ret = ob_get_clean();

        file_put_contents($filepath .'/' . $filename, $ret);
//        return $ret;
        $this->post['IMG_UPLOAD_THUMB_NAME'] =$filename;
    }

}