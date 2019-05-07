<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public $carousel_limit = 5;
    public $domain_name = 'www.shengtai.com';
    public function index()
    {
        $carousel = Db::name('carousel_map')->where(['status'=>1])->field('id,title,alt,url')->order('sort asc, id desc')->limit($this->carousel_limit)->select();//轮播图
        foreach($carousel as $k=>$v){
            $v['url'] = $this->domain_name.$v['url'];
        }
        $data = array();
        $data['carousel'] = $carousel;
        $this->assign(['data'=>$data]);
        return $this->fetch();
    }


}
