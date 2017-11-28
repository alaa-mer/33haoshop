<?php
/**
 * APP会员
 *
 *
 * * @随行商城 (c) 2015-2018 shopsx Inc. (http://www.intexh.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      随行商城提供技术支持 授权请购买随行商城授权
 */



defined('intexh_shop') or exit('Access Invalid!');

class memberControl{

    public function __construct(){
        require_once(BASE_PATH.'/framework/function/client.php');
    }

    public function infoOp(){
        if (!empty($_GET['uid'])){
            $member_info = nc_member_info($_GET['uid'],'uid');
        }elseif(!empty($_GET['user_name'])){
            $member_info = nc_member_info($_GET['user_name'],'user_name');
        }
        return $member_info;
    }
}
