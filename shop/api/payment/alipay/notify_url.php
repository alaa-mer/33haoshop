<?php
/**
 * 支付宝通知地址
 *
 * 
 * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */
error_reporting(7);
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>