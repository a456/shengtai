<?php
// +----------------------------------------------------------------------
// | snake
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2022 http://baiyf.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: NickBai <1902822973@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\model;

use think\Model;

class AdminModel extends Model
{
    // 确定链接表名
    protected $name = '';
    protected $url = '';
    protected $validate = '';
    protected $order = 'id desc';
    public function __construct($data = array())
    {
        if(isset($this->name)){
            $this->name = $data['table'];
        }
        if(isset($data['url'])){
            $this->url = $data['url'];
        }
        if(isset($data['url'])){
            $this->validate = $data['validate'];
        }
        if(isset($data['order'])){
            $this->order = $data['order'];
        }
    }

    /**
     * 根据id 获取信息
     * @param $id
     */
    public function getListId($id)
    {
        return $this->where('id', $id)->find();
    }

    /**
     * 查询
     *
     */
    public function getList($where, $offset, $limit)
    {
        return $this->where($where)->limit($offset, $limit)->order($this->order)->select();
    }

    /**
     * 根据搜索条件获取所有数量
     * @param $where
     */
    public function getListCount($where)
    {
        return $this->where($where)->count();
    }

    /**
     * 添加
     * @param $param
     */
    public function addList($param)
    {
        try{
            $result = $this->validate($this->validate)->save($param);
            if(false === $result){
                // 验证失败 输出错误信息
                return msg(-1, '', $this->getError());
            }else{

                return msg(1, url($this->url), '添加成功');
            }
        }catch (\Exception $e){
            return msg(-2, '', $e->getMessage());
        }
    }
    /**
     * 编辑
     * @param $param
     */
    public function editList($param)
    {
        try{

            $result = $this->validate($this->validate)->save($param, ['id' => $param['id']]);

            if(false === $result){
                // 验证失败 输出错误信息
                return msg(-1, '', $this->getError());
            }else{

                return msg(1, url($this->url), '编辑成功');
            }
        }catch(\Exception $e){
            return msg(-2, '', $e->getMessage());
        }
    }

    /**
     * 拼装操作按钮
     * @param $id
     * @return array
     */
    public function makeButton($data=array())
    {
        if(empty($data)){
                return $data;
        }
        if(empty($data['del_url'])){
            $data['del_url'] = 'admin/del';
        }
        return [
            '编辑' => [
                'auth' => $data['edit_url'],
                'href' => url('home/carousel_edit', ['id' => $data['id']]),
                'btnStyle' => 'primary',
                'icon' => 'fa fa-paste'
            ],
            '删除' => [
                'auth' => $data['del_url'],
                'href' => "javascript:articleDel(" . $data['id'] . ")",
                'btnStyle' => 'danger',
                'icon' => 'fa fa-trash-o'
            ]
        ];
    }


}
