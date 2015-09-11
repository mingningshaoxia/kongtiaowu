<?php
return array(
	//'配置项'=>'配置值'
	
	'APP_GROUP_LIST' => 'user,manager',
	'DEFAULT_GROUP' => 'user',
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',
	
	//数据库连接配置
	'DB_PORT'=>'3306',
	'DB_HOST'=>'localhost',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_NAME'=>'kongtiaowu',
	'DB_PREFIX'=>'',       //前缀设置，如果有则写，没有为空，一定要写
	'DB_CHARSET'=>'utf8',
	
	'URL_MODEL'=>2,  //需在此设置URL模式为2，伪静态(隐藏index.php)才会生效
	
	'URL_CASE_INSENSITIVE'=>true, //开启大小写不敏感
	
	//邮件配置
    'THINK_EMAIL' => array(
        'SMTP_HOST'   => 'smtp.163.com', //SMTP服务器
        'SMTP_PORT'   => '465', //SMTP服务器端口
        'SMTP_USER'   => "kawayi-shuai@163.com", //SMTP服务器用户名
        'SMTP_PASS'   => "391978.", //SMTP服务器密码
        'FROM_EMAIL'  => "kawayi-shuai@163.com", //发件人EMAIL
        'FROM_NAME'   => 'kongtiaowu.com', //发件人名称
        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
    ),
	
	
	/**********错误模板设置**********/
  'TMPL_EXCEPTION_FILE'=>THINK_PATH.'Tpl/think_exception2.tpl'
);
?>