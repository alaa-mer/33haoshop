<?php
/**
 * 前台品牌分类
 *
 *
 * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */


defined('intexh_shop') or exit('Access Invalid!');
class documentControl extends mobileHomeControl {
    public function __construct() {
        parent::__construct();
    }

    public function agreementOp() {
        $doc = Model('document')->getOneByCode('agreement');
        output_data($doc);
    }
}
