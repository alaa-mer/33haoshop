<?php
/**
 * 物流自提服务站首页
 *
 * * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */



defined('intexh_shop') or exit('Access Invalid!');

class loginControl extends BaseAccountCenterControl{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 登录
     */
    public function indexOp() {
        if ($_SESSION['delivery_login'] == 1) {
            @header('location: index.php?act=d_center');die;
        }
        if (chksubmit()) {
            $where = array();
            $where['dlyp_name'] = $_POST['dname'];
            $where['dlyp_passwd'] = md5($_POST['dpasswd']);
            $dp_info = Model('delivery_point')->getDeliveryPointInfo($where);
            if (!empty($dp_info)) {
                $_SESSION['delivery_login'] = 1;
                $_SESSION['dlyp_id'] = $dp_info['dlyp_id'];
                $_SESSION['dlyp_name'] = $dp_info['dlyp_name'];
                showDialog('登录成功', 'index.php?act=d_center', 'succ');
            } else {
                showDialog('登录失败');
            }
        }
        Tpl::showpage('login');
    }
    /**
     * 登出
     */
    public function logoutOp() {
        unset($_SESSION['delivery_login']);
        unset($_SESSION['dlyp_id']);
        unset($_SESSION['dlyp_name']);
        showDialog('退出成功', 'reload', 'succ');
    }
}
