<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    'success'=>'成功',
    'fail'=>'失败',
	'Only Read.'=>'只读权限',
	'The user has not assigned a camera region.'=>'该用户未分配摄像头区域',
    'The region has not assigned a channel.'=>'该区域未分配通道',
    'Camera ID existed.'=>'摄像头ID已存在',
    'IP input format is incorrect.'=>'IP输入格式不正确',
    'No data was submitted.'=>'数据未提交',
    'does not exist.'=>'不存在',
    'cannot be blank.'=>'不能为空',
    'No data existed.'=>'数据不存在',
    'Photo size must not exceed 10M'=>'照片尺寸不得超过10M',
    'Photo no face detected.'=>'照片未检测到人脸',
    'Photo entry failed.'=>'照片录入底库失败',
    'Only jpeg format supports.'=>'只支持上传JPEG格式',
    'Cannot set your own role.'=>'不能操作自己所属角色',
    'The role has been assigned to, cannot be deleted.'=>'该角色已分配用戶，不可刪除',
    ' is empty'=>'不能为空',
    ' Must not contain Chinese.'=>'不能包含中文',
    'Disable Account.'=>'账户已被禁用',
    'Incorrect Password.'=>'密码输入有误',
    'Account does not exist.'=>'账户不存在',
    'The role has been logged out.'=>'该角色已注销',
    'No Permission.'=>'无权限操作',
    'already existed.'=>'已存在',
    'Photo '=>'图片',
    'Member ID '=>'会员ID',
    'Event ID '=>'事件ID',
    'Role ID '=>'角色ID',
    'Template ID '=>'模板ID',
    'Region ID '=>'区域ID',
    'Parent ID '=>'父级ID',
    'Organization ID '=>'组织ID',
    'ID '=>'ID',
    'Grade ID '=>'年级',
    'Class ID '=>'班级',
    'Organizations '=>'组织',
    ' To '=>' 至 ',
    'Name '=>'名称',
    'Please specify the list of actions.'=>'请明确操作的列表类别',
    'Please upload an image.'=>'请上传图片',
    'Member Type '=>'会员类型',
    'Type '=>'类型',
    'The package is corrupt.'=>'压缩包已损坏',
    'Compressed inside the package.'=>'压缩包为空',
    'Please upload a ZIP or RAR compressed package.'=>'请上传 ZIP 或 RAR 压缩文件包',
    'File structure does not meet upload requirements.'=>'文件结构不符合上传要求',
    'No permission to modify your role.'=>'无权限修改自己的角色',
    'No permission to modify the same level role.'=>'无权限修改同级别角色',
    'Receiving role '=>'接收角色',
    'Node '=>'节点',
    'login_name'=>'账号',
    'login_pwd'=>'密码',
    'The person corresponding to the photo already exists in the personnel library.'=>'人员库内已存在该照片对应的人员',
    'Please upload the photos of the base library first.'=>'请先上传底库照片',
    'This function is suspended.'=>'该功能暂停使用',
    'Set the Region.'=>'请设置区域',
    'Default organization cannot be deleted.'=>'默认组织不可删除',
    'System variables are not modifiable.'=>'系统变量不可修改',
    'Visit period has expired.'=>'到访期限已过期',
    'Action type'=>'动作类型',
    'Please set the channel.'=>'请设置通道',
    'One channel cannot open multiple actions at the same time.'=>'一路通道不能同时开启多个动作',
    'Please assign a zone to the class first.'=>'请先为班级分配区域',
    'Please set the scoring standard.'=>'请设置评分标准',
    'Scoring standard '=>'评分标准',
    'Please choose the charging method.'=>'请选择收费方式',
	'Please configure the departure direction channel.'=>'请配置离开方向通道',
	'Please configure the access direction channel.'=>'请配置进入方向通道',
	'The access direction channel has been assigned to other areas, please select another channel.'=>'進入方向通道已分配到其他區域,請選擇其他通道',
	'The departure direction channel has been assigned to other areas, please select another channel.'=>'离开方向通道已分配到其他区域,请选择其他通道',
	'Please set the start and end time.'=>'请设置起止时间',
	'connection failed.'=>'连接失败',
	'Database'=>'数据库',
	'Gateway Time-out'=>'请求超时',
	'Please select a feature package.'=>'请选择功能套餐',
	'Please select storage space.'=>'请选择存储空间',
	'Please select the number of people.'=>'请选择人数',

	//Role
    'key_role_name'=>'超级管理员',
    'This role will not have the right to view data. Set the Region.'=>'该角色无权查看数据，请设置区域',

    //Attendance
    'Please fill in the time period setting.'=>'请填写时段设置',
    'The class has not been configured.'=>'该班级还未配置课程表',
    'The class does not exist.'=>'该班级不存在',
    'Please select a class.'=>'请选择班级',
    'Please fill in the complete start and end time.'=>'请填写完整的起止时间',
    'The person does not exist.'=>'该人员不存在',
    'Organization time period setting conflict.'=>'组织时段设置冲突',
    'Peer organizations can only set one.'=>'同级组织只能设置一个',

    //system
    'crm_status'=>'CRM 启用状态',
    'crm_url'=>'CRM 跳转地址',
    'attendance_status'=>'出勤启用状态',
    'ws_url'=>'前端视频内网获取地址',
    'system_name'=>'系统名称',
    'system_logo'=>'系统 Logo',
    'ws_out_url'=>'前端视频外网获取地址',
    'action_status'=>'动作启用状态',
    'behavior_duration'=>'异常行为事件隐藏时间',
    'visitor_status'=>'访客启用状态',
    'action_definition_status'=>'动作定义启用状态',
	'system_theme'=>'系统主题',
	'login_background'=>'登录背景图',
	'secondary_ws_url'=>'从属设备内网获取地址',
	'single_action_mode'=>'单动作模式启用状态',

	//action
	'stand_jump'=>'立定跳远',
	'pull_up'=>'引体向上',
	'sit_up'=>'仰卧起坐',
	'bending_forward'=>'坐位体前屈',
	'rope_jump'=>'跳绳',
	'shuttle_run'=>'折返跑',
	'800m_race'=>'800米长跑',
	'1000m_race'=>'1000米长跑',


    //Menu
    'defaults'=>[
        'key_index_management'=>'监控面板',
        'key_video_model'=>'视频模式',
        'key_data_model'=>'数据模式',
        'key_member_management'=>'人员管理',
        'key_structure_list'=>'组织架构',
        'key_member_type'=>'人员类型配置',
        'key_member_list'=>'人员列表',
        'key_member_whiteList'=>'白名单列表',
        'key_member_blackList'=>'黑名单列表',
        'key_visitor_management'=>'访客管理',
        'key_auth_management'=>'权限管理',
        'key_role_management'=>'角色管理',
        'key_user_management'=>'用户管理',
        'key_login_management'=>'在线管理',
        'key_operate_log'=>'操作日志',
        'key_data_management'=>'数据管理',
        'key_recognize_select'=>'识别查询',
        'key_picture_select'=>'图片查询',
        'key_video_select'=>'视频记录',
        'key_behavior_select'=>'行为识别',
        'key_engine_management'=>'配置管理',
        'key_camera_management'=>'通道配置',
        'key_message_management'=>'消息管理',
        'key_template_list'=>'消息管理',
        'key_send_list'=>'发送列表',
        'key_receive_list'=>'接收列表',
        'key_node_list'=>'推送配置',
        'key_region_management'=>'区域管理',
        'key_region_list'=>'区域管理',
        'key_attendance_management'=>'出勤管理',
        'key_photo_info'=>'出勤面板',
        'key_record_info'=>'出勤记录',
        'key_set_info'=>'出勤设置',
        'key_leave_info'=>'请假设置',
        'key_total_setting'=>'全局配置',
        'key_total_setting_detail'=>'系统配置',
        'key_action_management'=>'动作面板',
        'key_action_video'=>'动作视频',
        'key_action_recognize'=>'动作识别',
        'key_action_recognize_management'=>'动作识别',
        'key_realtime_analysis'=>'实时分析',
        'key_recognize_record'=>'识别记录',
        'key_data_analysis'=>'数据分析',
        'key_offline_video'=>'离线分析',
        'key_exam_mode'=>'考试模式',
        'key_action_setting'=>'动作配置',
        'key_grade_setting'=>'评分标准',
        'key_action_definition_management'=>'动作管理',
        'key_action_definition'=>'动作定义',
        'key_action_library'=>'动作素材库',
        'key_device_setting'=>'设备配置',
        'key_map_list'=>'地图管理',
        'key_education_management'=>'教务管理',
        'key_grade_list'=>'年级设置',
        'key_student_list'=>'学生列表',
        'key_exam_data'=>'考试记录',
    ],
    'security'=>[
        'key_index_management'=>'监控面板',
        'key_video_model'=>'视频模式',
        'key_data_model'=>'数据模式',
        'key_member_management'=>'人员管理',
        'key_structure_list'=>'组织架构',
        'key_member_type'=>'人员类型配置',
        'key_member_list'=>'人员列表',
        'key_member_whiteList'=>'白名单列表',
        'key_member_blackList'=>'黑名单列表',
        'key_visitor_management'=>'访客管理',
        'key_auth_management'=>'权限管理',
        'key_role_management'=>'角色管理',
        'key_user_management'=>'用户管理',
        'key_login_management'=>'在线管理',
        'key_operate_log'=>'操作日志',
        'key_data_management'=>'数据管理',
        'key_recognize_select'=>'识别查询',
        'key_picture_select'=>'图片查询',
        'key_video_select'=>'视频记录',
        'key_behavior_select'=>'行为识别',
        'key_engine_management'=>'配置管理',
        'key_camera_management'=>'通道配置',
        'key_message_management'=>'消息管理',
        'key_template_list'=>'消息管理',
        'key_send_list'=>'发送列表',
        'key_receive_list'=>'接收列表',
        'key_node_list'=>'推送配置',
        'key_region_management'=>'区域管理',
        'key_region_list'=>'区域管理',
        'key_attendance_management'=>'出勤管理',
        'key_photo_info'=>'出勤面板',
        'key_record_info'=>'出勤记录',
        'key_set_info'=>'出勤设置',
        'key_leave_info'=>'请假设置',
        'key_total_setting'=>'全局配置',
        'key_total_setting_detail'=>'系统配置',
        'key_action_management'=>'动作面板',
        'key_action_video'=>'动作视频',
        'key_action_recognize'=>'动作识别',
        'key_action_recognize_management'=>'动作识别',
        'key_realtime_analysis'=>'实时分析',
        'key_recognize_record'=>'识别记录',
        'key_data_analysis'=>'数据分析',
        'key_offline_video'=>'离线分析',
        'key_exam_mode'=>'考试模式',
        'key_action_setting'=>'动作配置',
        'key_grade_setting'=>'评分标准',
        'key_action_definition_management'=>'动作管理',
        'key_action_definition'=>'动作定义',
        'key_action_library'=>'动作素材库',
        'key_device_setting'=>'设备配置',
        'key_map_list'=>'地图管理',
        'key_education_management'=>'教务管理',
        'key_grade_list'=>'年级设置',
        'key_student_list'=>'学生列表',
        'key_exam_data'=>'考试记录',
    ],
    'education'=>[
        'key_index_management'=>'监控面板',
        'key_video_model'=>'视频模式',
        'key_data_model'=>'数据模式',
        'key_member_management'=>'人员管理',
        'key_structure_list'=>'组织架构',
        'key_member_type'=>'人员类型配置',
        'key_member_list'=>'人员列表',
        'key_member_whiteList'=>'白名单列表',
        'key_member_blackList'=>'黑名单列表',
        'key_visitor_management'=>'访客管理',
        'key_auth_management'=>'权限管理',
        'key_role_management'=>'职级管理',
        'key_user_management'=>'用户管理',
        'key_login_management'=>'在线管理',
        'key_operate_log'=>'操作日志',
        'key_data_management'=>'数据管理',
        'key_recognize_select'=>'识别查询',
        'key_picture_select'=>'图片查询',
        'key_video_select'=>'视频记录',
        'key_behavior_select'=>'行为识别',
        'key_engine_management'=>'配置管理',
        'key_camera_management'=>'通道配置',
        'key_message_management'=>'消息管理',
        'key_template_list'=>'消息管理',
        'key_send_list'=>'发送列表',
        'key_receive_list'=>'接收列表',
        'key_node_list'=>'推送配置',
        'key_region_management'=>'区域管理',
        'key_region_list'=>'区域管理',
        'key_attendance_management'=>'出勤管理',
        'key_photo_info'=>'出勤面板',
        'key_record_info'=>'出勤记录',
        'key_set_info'=>'出勤设置',
        'key_leave_info'=>'请假设置',
        'key_total_setting'=>'全局配置',
        'key_total_setting_detail'=>'系统配置',
        'key_action_management'=>'动作面板',
        'key_action_video'=>'动作视频',
        'key_action_recognize'=>'动作识别',
        'key_action_recognize_management'=>'动作识别',
        'key_realtime_analysis'=>'实时分析',
        'key_recognize_record'=>'识别记录',
        'key_data_analysis'=>'数据分析',
        'key_offline_video'=>'离线分析',
        'key_exam_mode'=>'考试模式',
        'key_action_setting'=>'动作配置',
        'key_grade_setting'=>'评分标准',
        'key_action_definition_management'=>'动作管理',
        'key_action_definition'=>'动作定义',
        'key_action_library'=>'动作素材库',
        'key_device_setting'=>'设备配置',
        'key_map_list'=>'地图管理',
        'key_education_management'=>'教务管理',
        'key_grade_list'=>'年级设置',
        'key_student_list'=>'学生列表',
        'key_exam_data'=>'考试记录',
    ],
    'gym'=>[
        'key_index_management'=>'监控面板',
        'key_video_model'=>'视频模式',
        'key_data_model'=>'数据模式',
        'key_member_management'=>'人员管理',
        'key_structure_list'=>'组织架构',
        'key_member_type'=>'人员类型配置',
        'key_member_list'=>'人员列表',
        'key_member_whiteList'=>'白名单列表',
        'key_member_blackList'=>'黑名单列表',
        'key_visitor_management'=>'访客管理',
        'key_auth_management'=>'权限管理',
        'key_role_management'=>'角色管理',
        'key_user_management'=>'用户管理',
        'key_login_management'=>'在线管理',
        'key_operate_log'=>'操作日志',
        'key_data_management'=>'数据管理',
        'key_recognize_select'=>'识别查询',
        'key_picture_select'=>'图片查询',
        'key_video_select'=>'视频记录',
        'key_behavior_select'=>'行为识别',
        'key_engine_management'=>'配置管理',
        'key_camera_management'=>'通道配置',
        'key_message_management'=>'消息管理',
        'key_template_list'=>'消息管理',
        'key_send_list'=>'发送列表',
        'key_receive_list'=>'接收列表',
        'key_node_list'=>'推送配置',
        'key_region_management'=>'区域管理',
        'key_region_list'=>'区域管理',
        'key_attendance_management'=>'出勤管理',
        'key_photo_info'=>'出勤面板',
        'key_record_info'=>'出勤记录',
        'key_set_info'=>'出勤设置',
        'key_leave_info'=>'请假设置',
        'key_total_setting'=>'全局配置',
        'key_total_setting_detail'=>'系统配置',
        'key_action_management'=>'动作面板',
        'key_action_video'=>'动作视频',
        'key_action_recognize'=>'动作识别',
        'key_action_recognize_management'=>'动作识别',
        'key_realtime_analysis'=>'实时分析',
        'key_recognize_record'=>'识别记录',
        'key_data_analysis'=>'数据分析',
        'key_offline_video'=>'离线分析',
        'key_exam_mode'=>'考试模式',
        'key_action_setting'=>'动作配置',
        'key_grade_setting'=>'评分标准',
        'key_action_definition_management'=>'动作管理',
        'key_action_definition'=>'动作定义',
        'key_action_library'=>'动作素材库',
        'key_device_setting'=>'设备配置',
        'key_map_list'=>'地图管理',
        'key_education_management'=>'教务管理',
        'key_grade_list'=>'年级设置',
        'key_student_list'=>'学生列表',
        'key_exam_data'=>'考试记录',
    ],
    'estate'=>[
        'key_index_management'=>'监控面板',
        'key_video_model'=>'视频模式',
        'key_data_model'=>'数据模式',
        'key_member_management'=>'人员管理',
        'key_structure_list'=>'内部组织',
        'key_member_type'=>'人员类型配置',
        'key_member_list'=>'入驻公司',
        'key_member_whiteList'=>'外部人员',
        'key_member_blackList'=>'黑名单',
        'key_visitor_management'=>'访客管理',
        'key_auth_management'=>'权限管理',
        'key_role_management'=>'角色管理',
        'key_user_management'=>'用户管理',
        'key_login_management'=>'在线管理',
        'key_operate_log'=>'操作日志',
        'key_data_management'=>'数据管理',
        'key_recognize_select'=>'识别查询',
        'key_picture_select'=>'图片查询',
        'key_video_select'=>'视频记录',
        'key_behavior_select'=>'行为识别',
        'key_engine_management'=>'配置管理',
        'key_camera_management'=>'通道配置',
        'key_message_management'=>'消息管理',
        'key_template_list'=>'消息管理',
        'key_send_list'=>'发送列表',
        'key_receive_list'=>'接收列表',
        'key_node_list'=>'推送配置',
        'key_region_management'=>'区域管理',
        'key_region_list'=>'区域管理',
        'key_attendance_management'=>'出勤管理',
        'key_photo_info'=>'出勤面板',
        'key_record_info'=>'出勤记录',
        'key_set_info'=>'出勤设置',
        'key_leave_info'=>'请假设置',
        'key_total_setting'=>'全局配置',
        'key_total_setting_detail'=>'系统配置',
        'key_action_management'=>'动作面板',
        'key_action_video'=>'动作视频',
        'key_action_recognize'=>'动作识别',
        'key_action_recognize_management'=>'动作识别',
        'key_realtime_analysis'=>'实时分析',
        'key_recognize_record'=>'识别记录',
        'key_data_analysis'=>'数据分析',
        'key_offline_video'=>'离线分析',
        'key_exam_mode'=>'考试模式',
        'key_action_setting'=>'动作配置',
        'key_grade_setting'=>'评分标准',
        'key_action_definition_management'=>'动作管理',
        'key_action_definition'=>'动作定义',
        'key_action_library'=>'动作素材库',
        'key_device_setting'=>'设备配置',
        'key_map_list'=>'地图管理',
        'key_education_management'=>'教务管理',
        'key_grade_list'=>'年级设置',
        'key_student_list'=>'学生列表',
        'key_exam_data'=>'考试记录',
    ],
    'digital_map'=>[
        'key_index_management'=>'监控面板',
        'key_video_model'=>'视频模式',
        'key_data_model'=>'数据模式',
        'key_member_management'=>'人员管理',
        'key_structure_list'=>'内部组织',
        'key_member_type'=>'人员类型配置',
        'key_member_list'=>'入驻公司',
        'key_member_whiteList'=>'外部人员',
        'key_member_blackList'=>'黑名单',
        'key_visitor_management'=>'访客管理',
        'key_auth_management'=>'权限管理',
        'key_role_management'=>'角色管理',
        'key_user_management'=>'用户管理',
        'key_login_management'=>'在线管理',
        'key_operate_log'=>'操作日志',
        'key_data_management'=>'数据管理',
        'key_recognize_select'=>'识别查询',
        'key_picture_select'=>'图片查询',
        'key_video_select'=>'视频记录',
        'key_behavior_select'=>'行为识别',
        'key_engine_management'=>'配置管理',
        'key_camera_management'=>'通道配置',
        'key_message_management'=>'消息管理',
        'key_template_list'=>'消息管理',
        'key_send_list'=>'发送列表',
        'key_receive_list'=>'接收列表',
        'key_node_list'=>'推送配置',
        'key_region_management'=>'区域管理',
        'key_region_list'=>'区域管理',
        'key_attendance_management'=>'出勤管理',
        'key_photo_info'=>'出勤面板',
        'key_record_info'=>'出勤记录',
        'key_set_info'=>'出勤设置',
        'key_leave_info'=>'请假设置',
        'key_total_setting'=>'全局配置',
        'key_total_setting_detail'=>'系统配置',
        'key_action_management'=>'动作面板',
        'key_action_video'=>'动作视频',
        'key_action_recognize'=>'动作识别',
        'key_action_recognize_management'=>'动作识别',
        'key_realtime_analysis'=>'实时分析',
        'key_recognize_record'=>'识别记录',
        'key_data_analysis'=>'数据分析',
        'key_offline_video'=>'离线分析',
        'key_exam_mode'=>'考试模式',
        'key_action_setting'=>'动作配置',
        'key_grade_setting'=>'评分标准',
        'key_action_definition_management'=>'动作管理',
        'key_action_definition'=>'动作定义',
        'key_action_library'=>'动作素材库',
        'key_device_setting'=>'设备配置',
        'key_map_list'=>'地图管理',
        'key_education_management'=>'教务管理',
        'key_grade_list'=>'年级设置',
        'key_student_list'=>'学生列表',
        'key_exam_data'=>'考试记录',
    ],
    'attendance'=>[
        'key_index_management'=>'首页面板',
        'key_video_model'=>'实时画面',
        'key_data_model'=>'识别事件',

        'key_structure_list'=>'组织结构',
	    'key_department_list'=>'部门管理',
	    'key_member_list'=>'人员管理',

	    'key_attendance_management'=>'考勤管理',
	    'key_photo_info'=>'考勤面板',
	    'key_record_info'=>'考勤记录',
	    'key_set_info'=>'考勤设置',
	    'key_leave_info'=>'请假设置',
	    'key_video_info'=>'视频回放',

	    'key_engine_management'=>'配置管理',
	    'key_total_setting_detail'=>'系统设置',
	    'key_camera_management'=>'通道设置',
	    'key_region_list'=>'区域设置',

	    'key_auth_management'=>'系统权限',
	    'key_role_management'=>'角色管理',
	    'key_user_management'=>'用户管理',

    ],
    'cloud_plat'=>[
        'key_data_screen'=>'首页面板',
        'key_screen_data'=>'数据检测',
        'key_report_form'=>'数据报表',

	    'key_function_management'=>'功能管理',
        'key_people_count'=>'人员数量',
        'key_feature_package'=>'功能套餐',
        'key_action_item'=>'动作项目',
        'key_storage_capacity'=>'存储容量',
        'key_terminal_list'=>'终端列表',

	    'key_auth_management'=>'权限管理',
	    'key_role_management'=>'角色管理',
	    'key_user_management'=>'用户管理',
	    'key_login_management'=>'在线管理',
	    'key_operate_log'=>'操作日志',

	    'key_school_management'=>'学校管理',
	    'key_school_list'=>'学校列表',

	    'key_version_management'=>'版本管理',
	    'key_update_management'=>'升级管理',
	    'key_version_history'=>'版本记录',
    ],
    'education_business'=>[
        'key_data_screen'=>'首页面板',
	    'key_data_analysis'=>'数据分析',

	    'key_education_management'=>'教务管理',
	    'key_role_management'=>'职级管理',
	    'key_user_management'=>'教师管理',
	    'key_grade_list'=>'年级管理',
	    'key_student_list'=>'学生管理',
	    'key_visitor_management'=>'信息采集',
	    'key_weixin_management'=>'微信用户',

	    'key_action_recognize_management'=>'体测项目',
	    'key_exam_data'=>'考试记录',
	    'key_recognize_record'=>'动作记录',
	    'key_grade_setting'=>'评分标准',
	    'key_action_report'=>'体测报表',

	    'key_subscription_statistics'=>'订阅统计',
	    'key_subscription_list'=>'订阅列表',
	    'key_total_expenses'=>'费用统计',
	    'key_storage_statistics'=>'存储统计',

	    'key_workstation_management'=>'工作站管理',
	    'key_terminal_management'=>'终端管理',

	    'key_message_management'=>'消息中心',
	    'key_receive_list'=>'收件箱',
	    'key_send_list'=>'发件箱',
	    'key_template_list'=>'消息模板',

	    'key_engine_management'=>'系统设置',
	    'key_total_setting_detail'=>'系统配置',
    ],
    'education_device'=>[
        'key_data_screen'=>'首页面板',

	    'key_education_management'=>'教务管理',
	    'key_role_management'=>'职级管理',
	    'key_user_management'=>'教师管理',
	    'key_grade_list'=>'年级管理',
	    'key_student_list'=>'学生管理',
	    'key_visitor_management'=>'信息采集',

	    'key_action_recognize_management'=>'体测项目',
	    'key_realtime_analysis'=>'实时分析',
	    'key_data_analysis'=>'数据分析',
	    'key_exam_data'=>'考试记录',
	    'key_recognize_record'=>'动作记录',
	    'key_grade_setting'=>'评分标准',
	    'key_action_report'=>'体测报表',

	    'key_subscription_statistics'=>'订阅统计',
	    'key_subscription_list'=>'订阅列表',
	    'key_total_expenses'=>'费用统计',
	    'key_storage_statistics'=>'存储统计',

	    'key_workstation_management'=>'工作站管理',
	    'key_terminal_management'=>'终端管理',

	    'key_message_management'=>'消息中心',
	    'key_receive_list'=>'收件箱',
	    'key_send_list'=>'发件箱',
	    'key_template_list'=>'消息模板',

	    'key_engine_management'=>'系统设置',
	    'key_total_setting_detail'=>'系统配置',
	    'key_up_list'=>'升级管理',

        'key_configuration_management'=>'配置管理',
        'key_camera_management'=>'通道设置',
        'key_action_setting'=>'动作配置',
        'key_device_setting'=>'外接设备',

    ],
];
