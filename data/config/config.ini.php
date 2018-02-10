<?php
//by intexh_shop.com 随行商城
$config = array();
$config['base_site_url'] 		= 'http://'.$_SERVER ['HTTP_HOST'];
$config['shop_site_url']        = $config['base_site_url'].'/shop';
$config['cms_site_url']         = $config['base_site_url'].'/cms';
$config['microshop_site_url']   = $config['base_site_url'].'/microshop';
$config['circle_site_url']      = $config['base_site_url'].'/circle';
$config['admin_site_url']       = $config['base_site_url'].'/admin';
$config['mobile_site_url']      = $config['base_site_url'].'/mobile';
$config['wap_site_url']         = $config['base_site_url'].'/wap';
$config['chat_site_url']        = $config['base_site_url'].'/chat';
$config['wechat_site_url']      = $config['base_site_url'].'/wechat/ems';
$config['node_site_url'] 		= $config['base_site_url'].':33'; //如果要启用IM，把kuxing.com修改为您的服务器IP
$config['delivery_site_url']    = $config['base_site_url'].'/delivery';
$config['chain_site_url']       = $config['base_site_url'].'/chain';
$config['member_site_url']      = $config['base_site_url'].'/member';
$config['upload_site_url']      = $config['base_site_url'].'/data/upload';
$config['resource_site_url']    = $config['base_site_url'].'/data/resource';
$config['cms_modules_url']      = $config['base_site_url'].'/admin/modules/cms';
$config['microshop_modules_url']= $config['base_site_url'].'/admin/modules/microshop';
$config['circle_modules_url']   = $config['base_site_url'].'/admin/modules/circle';
$config['admin_modules_url']    = $config['base_site_url'].'/admin/modules/shop';
$config['mobile_modules_url']   = $config['base_site_url'].'/admin/modules/mobile';
$config['version']              = '201611251125';
$config['setup_date']           = '2016-12-06 20:33:56';
$config['gip']                  = 0;
$config['dbdriver']             = 'mysqli';
$config['tablepre']             = 'shop_';
$config['db']['1']['dbhost']       = '123.59.68.26';	//数据库地址,一般默认
$config['db']['1']['dbport']       = '3306';		//数据库端口,一般默认
$config['db']['1']['dbuser']       = 'ts.pinewer.com';		//数据库用户
$config['db']['1']['dbpwd']        = 'AT4rsGWK42xPQp9E';		//数据库密码
$config['db']['1']['dbname']       = 'ts.pinewer.com';	//数据库名
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']             = $config['db']['master'];
$config['session_expire']   = 3600;
$config['lang_type']        = 'zh_cn';
$config['cookie_pre']       = 'F1EE_';
$config['cache_open'] = false;
//$config['redis']['prefix']        = 'hao_';
//$config['redis']['master']['port']        = 6379;
//$config['redis']['master']['host']        = '127.0.0.1';
//$config['redis']['master']['pconnect']    = 0;
//$config['redis']['slave']             = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'intexh_shop';
$config['debug']            = false;
$config['url_model'] = false; //如果要启用伪静态，把false修改为true
$config['subdomain_suffix'] = '';//如果要启用店铺二级域名，请填写不带www的域名，比如intexh_shop.com
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = false;//如果要启用IM，把false修改为true
$config['flowstat_tablenum'] = 3;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['https'] = false;


//=======================项目配置========================
//短信配置
//验证码模版 您的验证码是${code}。如非本人操作,请忽略此短信
$config['sms']['dayu']['verify_code_tpl'] = 'SMS_36955120';
$config['sms']['dayu']['sign_name'] = '在场';
$config['sms']['dayu']['key'] = '23584934';
$config['sms']['dayu']['secret'] = '543f12e978cd6293a97702d3f99d2d8a';


return $config;