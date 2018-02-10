<?php
/**
 * 接收微信请求，接收productid和用户的openid等参数，执行（【统一下单API】返回prepay_id交易会话标识
 *
 * 
 * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */
error_reporting(7);
$_GET['act']	= 'payment';
$_GET['op']		= 'wxpay_return';
require_once(dirname(__FILE__).'/../../../index.php');
?>