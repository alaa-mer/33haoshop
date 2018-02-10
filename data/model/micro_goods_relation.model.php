<?php
/**
 * 微商城推荐商品分类关系模型
 *
 *
 *
 * * @随行商城 (c) 2015-2018 intexhshop Inc. (http://www.intexh_shop.com)
 * @license    http://www.33 hao.c om
 * 
 * @since      随行商城提供技术支持 授权请购买动想随行授权
 */
defined('intexh_shop') or exit('Access Invalid!');
class micro_goods_relationModel extends Model{

    public function __construct(){

        parent::__construct('micro_goods_relation');

    }

    /**
     * 读取列表
     * @param array $condition
     *
     */
    public function getList($condition,$page=null,$order='',$field='*'){

        $result = $this->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;

    }

    /**
     * 读取单条记录
     * @param array $condition
     *
     */
    public function getOne($condition){

        $result = $this->where($condition)->find();
        return $result;

    }

    /*
     *  判断是否存在
     *  @param array $condition
     *
     */
    public function isExist($condition) {

        $result = $this->getOne($condition);
        if(empty($result)) {
            return FALSE;
        }
        else {
            return TRUE;
        }
    }

    /*
     * 增加
     * @param array $param
     * @return bool
     */
    public function save($param){

        return $this->insert($param);

    }

    /*
     * 增加
     * @param array $param
     * @return bool
     */
    public function saveAll($param){

        return $this->insertAll($param);

    }

    /*
     * 更新
     * @param array $update
     * @param array $condition
     * @return bool
     */
    public function modify($update, $condition){

        return $this->where($condition)->update($update);

    }

    /*
     * 删除
     * @param array $condition
     * @return bool
     */
    public function drop($condition){

        return $this->where($condition)->delete();

    }

}