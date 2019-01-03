<?php

class ArticleInfo extends CI_Controller {

    public function __construct() {
      parent::__construct();
    }

    public function article_list(){
	ini_set('date.timezone','Asia/Shanghai');
	$page = $this->input->post('page');
        if($page<=0){
            $page=1;
        }
        if($page==1){
            $pagesize=20;
            $offset=($page-1)*$pagesize;
        }else{
            $pagesize=10;
            $offset=20+($page-2)*$pagesize;
        }
        $where = ' is_dele = 0 and type=0 ';
        $query = $this->db->get_where('t_diary',$where,$pagesize,$offset);
        $result = $query->result();
        $result_arr = object_to_array($result);
        $arr=array();
        if(!empty($result_arr)){
            foreach ($result_arr as $k=>$v){
                $arr[$k]['id'] = $v['id']?$v['id']:'';
                $arr[$k]['uid'] = $v['uid']?$v['uid']:'';
                $arr[$k]['rank'] = $v['rank']?$v['rank']:'';
                $arr[$k]['title'] = $v['title']?$v['title']:'';
                $arr[$k]['comment_num'] = $v['comment_num']?$v['comment_num']:'';
                $arr[$k]['img'] = $v['img']?'http://attachment.shengyimao.com/'.$v['img']:'';
                $arr[$k]['publish_time'] = $v['publish_time']?date('Y-m-d',$v['publish_time']):'';
                $read_num = $v['read_num'];
                $arr[$k]['read_num'] = strval($read_num);
            }
            $data["data"]=$arr;
            $data["respcode"] = "000";
            show_json($data,'请求成功');
            exit;
        }else{
            $data["data"]=$arr;
            $data["respcode"] = "411";
            show_json($data,'数据为空');
            exit;
        }
    }
}
