<?php
/**
 * 商家注销
 *
 * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */



defined('intexh_shop') or exit('Access Invalid!');

class seller_logoutControl extends mobileSellerControl {

    public function __construct(){
        parent::__construct();
    }

    /**
     * 注销
     */
    public function indexOp(){
        if(empty($_POST['seller_name']) || !in_array($_POST['client'], $this->client_type_array)) {
            output_error('参数错误');
        }

        $model_mb_seller_token = Model('mb_seller_token');

        if($this->seller_info['seller_name'] == $_POST['seller_name']) {
            $condition = array();
            $condition['seller_id'] = $this->seller_info['seller_id'];
            $model_mb_seller_token->delSellerToken($condition);
            output_data('1');
        } else {
            output_error('参数错误');
        }
    }

}
