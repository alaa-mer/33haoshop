<?php
/**
 * 显示图片
 *
 *
 *
 * * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */



defined('intexh_shop') or exit('Access Invalid!');

class show_picsControl extends BaseMemberControl {

    public function indexOp(){

        $type = trim($_GET['type']);
        if(empty($_GET['pics'])) {
            $this->goto_index();
        }
        $pics = explode('|',trim($_GET['pics']));
        $pic_path = '';
        switch ($type) {
            case 'inform':
                $pic_path = UPLOAD_SITE_URL.DS.'shop/inform/';
                break;
            case 'complain':
                $pic_path = UPLOAD_SITE_URL.DS.'shop/complain/';
                break;
            default:
                $this->goto_index();
                break;
        }

        Tpl::output('pic_path',$pic_path);
        Tpl::output('pics',$pics);
        //输出页面
        Tpl::showpage('show_pics','null_layout');
    }

    private function goto_index() {
        @header("Location: ".urlShop('member', 'home'));
        exit;
    }
}
