<?php
/**
 * 买家相册模型
 * * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */
defined('intexh_shop') or exit('Access Invalid!');
class sns_albumModel extends Model {

    public function __construct(){
        parent::__construct('sns_albumpic');
    }

    public function getSnsAlbumClassDefault($member_id) {
        if(empty($member_id)) {
            return null;
        }

        $condition = array();
        $condition['member_id'] = $member_id;
        $condition['is_default'] = 1;
        $info = $this->table('sns_albumclass')->where($condition)->find();

        if(!empty($info)) {
            return $info['ac_id'];
        } else {
            return null;
        }
    }
}
