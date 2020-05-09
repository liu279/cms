<?php


namespace common\components;


class Common
{
    static function message($msg){
        return \Yii::t('app',$msg);
    }
    static function error($code, $msg = '', $data = '')
    {
        $msg = $msg? : Error::$errMsg[$code];
        return ['status'=> 500, 'code' => $code, 'message' => self::message($msg), 'Data' => $data];
    }

    static function output($data = [], $code = 0)
    {
        $msg = Error::$errMsg[$code];
        return ['status'=> 200, 'code' => $code, 'message' => self::message($msg), 'time' => date('Y-m-d H:i:s'), 'Data' => $data];
    }

    public static function outputFormat($data = [], $format = []) {
        if(empty($data)){
            return [];
        }
        if (is_object($data)) {
            $data = get_object_vars($data);
        }
        // $formatKey = array_keys($format);
        foreach ($data as $key => $val) {
            if (is_array($val)) {
                $data[$key] = self::outputFormat($val, $format);
            } else {
                $formatKeys = array_keys($format);
                if (in_array($key, $formatKeys) && isset($data[$key])) {
                    switch ($format[$key]) {
                        case 'img':
                            if (!empty($data[$key])  ){
                                $data[$key] =  strpos($data[$key], "http://") !== FALSE ?
                                    $data[$key]:
                                    \Yii::$app->params['static_url'] .$data[$key];
                            }

                            break;
                        case 'time':
                            $data[$key] = date('Y-m-d H:i:s', $val);
                            break;
                        case 'date':
                        default :
                            $data[$key] = date('Y-m-d', $val);
                            break;
                    }
                }
            }
        }
        return $data;
    }
    /*
      生成随机用户名
    */
    static function generate_username( $length = 6 ) {
        // 密码字符集，可任意添加你需要的字符
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';//!@#$%^&*()-_ []{}<>~`+=,.;:/?|';
        $password = '';
        for ( $i = 0; $i < $length; $i++ )
        {
            // 这里提供两种字符获取方式
            // 第一种是使用substr 截取$chars中的任意一位字符；
            // 第二种是取字符数组$chars 的任意元素
            // $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
            $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
        }
        return $password;
    }

}