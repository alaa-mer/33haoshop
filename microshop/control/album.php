<?php
/**
 * 默认展示页面
 *
 *
 * * @随行商城 (c) 2015-2018 shopsx Inc. (http://www.intexh.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      随行商城提供技术支持 授权请购买随行商城授权
 */



defined('intexh_shop') or exit('Access Invalid!');
class albumControl extends MircroShopControl{

    public function __construct() {
        parent::__construct();
        Tpl::output('index_sign','album');
    }

    //首页
    public function indexOp(){
        Tpl::showpage('album');
    }
}
