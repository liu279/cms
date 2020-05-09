<?php

namespace common\components;

use Yii;

class Error extends \yii\base\Object
{

    const STATUS_OK = 0;    					// 成功
    const REQUEST_ILLEGALITY = 201;  			// 非法请求
    const REQUEST_UNIDENTIFICATION = 202;  		// 未识别请求
    const PARAMETER_ERROR = 203;  				// 输入参数错误
    const PARAMETER_LAKE = 204;  				// 缺少必填参数
    const USER_NO_ACCESS = 205;  				// 无权限操作
    const REQUEST_TIMEOUT = 206;  				// 请求超时
    const INTERNAL_ERROR = 207;  				// 内部错误
    const NO_PERMISSION = 208;  				// 此用户无权限操作
	const MOBILE_IS_EXIST = 209;				// 手机号已存在
	const SMS_VERFITY_CODE_IS_EMPTY = 210;		// 手机验证码为空
	const NICKNAME_IS_EMPTY = 211;				// 用户昵称为空
	const NICKNAME_IS_EXIST = 212;				// 用户昵称已存在
    const DATA_NON_TEXIST = 213;                // 数据不存在
    const USER_NOT_EXIST = 214;					// 用户不存在
    const REPEAT_REQUEST = 215;					// 重复请求
    const PASSWORD_WRONG = 216;					// 密码输入有误，请确认后重试


    const SMS_SERVER_DENY = 512;				// 服务器拒绝访问，或者拒绝操作
    const SMS_APPKEY_NONE = 513;				// 求Appkey不存在或被禁用
    const SMS_ACCESS_DENY = 514;    			// 权限不足
    const SMS_INTERNAL_ERROR = 515;				// 服务器内部错误
    const SMS_PARAMETER_LACK = 517;				// 缺少必要的请求参数
    const SMS_INVALID_PHONE_FORMAT = 518;		// 请求中用户的手机号格式不正确（包括手机的区号）
    const SMS_EXCEED_MAX_LIMIT = 519;			// 请求发送验证码次数超出限制
    const SMS_INVALID_CODE = 520;				// 无效验证码
    const SMS_MONEY_NOT_ENOUGH = 526;			// 余额不足


    public static $errMsg = array(
        self::STATUS_OK => 'success',
        self::REQUEST_ILLEGALITY => '非法请求',
        self::REQUEST_UNIDENTIFICATION => '未识别请求',
        self::PARAMETER_ERROR => 'Parameter Error',//'輸入參數錯誤',
        self::PARAMETER_LAKE => '缺少必填参数',
        self::USER_NO_ACCESS => 'No Permission.',//'无权限操作',
        self::REQUEST_TIMEOUT => '请求超时',
        self::INTERNAL_ERROR => '内部错误',
        self::NO_PERMISSION => '此用户无权限操作',
    	self::MOBILE_IS_EXIST => '手机号已存在',
    	self::SMS_VERFITY_CODE_IS_EMPTY => '手机验证码为空',
    	self::NICKNAME_IS_EMPTY => '用户昵称为空',
    	self::NICKNAME_IS_EXIST => '用户昵称已存在',
        self::DATA_NON_TEXIST => '数据不存在',
    	self::USER_NOT_EXIST => '用户不存在',
    	self::SMS_SERVER_DENY => 'Server Access Deny',//'服务器拒绝访问，或者拒绝操作',
    	self::SMS_APPKEY_NONE => '求Appkey不存在或被禁用',
    	self::SMS_ACCESS_DENY => 'Access Deny',//'权限不足',
    	self::SMS_INTERNAL_ERROR => 'Internal Server Error',//'服务器内部错误',
    	self::SMS_PARAMETER_LACK => '缺少必要的请求参数',
    	self::SMS_INVALID_PHONE_FORMAT => '请求中用户的手机号格式不正确（包括手机的区号）',
    	self::SMS_EXCEED_MAX_LIMIT => '请求发送验证码次数超出限制',
    	self::SMS_MONEY_NOT_ENOUGH => '余额不足',
    	self::REPEAT_REQUEST => '重复请求 ',
        self::PASSWORD_WRONG =>'密码输入有误，请确认后重试',
    );

}
