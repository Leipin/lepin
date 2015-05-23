<?php
/*
*
*系统全局配置
*
*/
		return array(
		//'配置项'=>'配置值'
		'APP_GROUP_MODE'=>1,
		'APP_GROUP_LIST'=>'Home,Admin',
		'DEFAULT_GROUP'=>'Home',
		//路由开启
		'URL_ROUTER_ON'=>true,
		'URL_ROUTER_RULES'=>array('home/:id/d'=>array('Home/Index'),
			'home:name'=>'Home/Index',
			'home/:year\d/:month\d'=>'Home/Index',
			),
		/**模块相关配置**/
		'AUTOLOAD_NAMESPACE'=>array('Addons'=>ONETHINK_ADDON_PATH),//扩展模块列表
		'MULTI_MODULE'=>true,//模块名显示隐藏
		'DEFAULT_MODULE'=>'Home',
		'MODULE_DENY_LIST'=>array('Common','User','Admin','Install'),
		'MODULE_ALLOW_LIST'=>'Home,Admin,Member',//创建分组
		/*系统数据加密设置*/
		'DATA_AUTH_KEY'=>'Y9k>up5P=Aa([EFr|DsO0cdSH3Jm]$W+Qxi.g)~Z',//默认数据加密KEY
		
		 /* 用户相关设置 */
	    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
	    'USER_ADMINISTRATOR' => 1, //管理员用户ID
	    /* URL配置 */
	    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
	    'URL_MODEL'            => 2, //URL模式
	    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
	    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
	    /* 全局过滤配置 */
	    'DEFAULT_FILTER' => '', //全局过滤函数
	    'SHOW_PAGE_TRACE'=>false,
	    // if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP >5.3.0 !');
	    /* 数据库配置 */
	    'DB_TYPE'   => 'mysql', // 数据库类型
	   // 'DB_HOST'   => '127.0.0.1', // 服务器地址59.188.8.43
	   // 'DB_HOST'   => '192.168.0.18', // 服务器地址59.188.8.43
	     'DB_HOST'   => '59.188.8.43',
	    'DB_NAME'   => 'lepin', // 数据库名
	    'DB_USER'   => 'root', // 用户名
	    'DB_PWD'    => 'root',  // 密码
	    'DB_PORT'   => '3306', // 端口
	    'DB_PREFIX' => 'leipin_', // 数据库表前缀

	   	/* 文档模型配置 (文档模型核心配置，请勿更改) */
	    // 'DOCUMENT_MODEL_TYPE' => array(2 => '主题', 1 => '目录', 3 => '段落'),


		 //开启布局
		'LAYOUT_ON'=>true,
		'LAYOUT_NAME'=>'Base/common',

		//配置数据库
		'DB_DSN'=>'mysql://root:root@localhost/jd_store',
		'DB_CHARSET'=>'utf8',
		'DB_PREFIX'=>'jd_',

		//显示调试信息
		'SHOW_PAGE_TRACE'=>true

);