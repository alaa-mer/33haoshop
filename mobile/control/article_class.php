<?php
/**
 * 文章 
 * @随行商城b1 (c) 2005-2016 intexh_shop Inc.
 * 
 * @link       交流群号：216611541
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 * 
 **/

defined('intexh_shop') or exit('Access Invalid!');
class article_classControl extends mobileHomeControl{

	public function __construct() {
        parent::__construct();
    }
    
    public function indexOp() {
			$article_class_model	= Model('article_class');
			$article_model	= Model('article');
			$condition	= array();
			
			$article_class = $article_class_model->getClassList($condition);
			output_data(array('article_class' => $article_class));		
    }
}
