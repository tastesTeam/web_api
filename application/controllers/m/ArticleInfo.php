<?php

class ArticleInfo extends CI_Controller {

    public function __construct() {
      parent::__construct();
    }

    public function article_List(){
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
        $where = ' status = 0';
        $query = $this->db->get_where('blog_article',$where,$pagesize,$offset);
        $result = $query->result();
        $result_arr = object_to_array($result);
        $arr=array();
        if(!empty($result_arr)){
            foreach ($result_arr as $k=>$v){
                $arr[$k]['id'] = $v['id']?$v['id']:'';
                $arr[$k]['uid'] = $v['uid']?$v['uid']:'';
                $arr[$k]['title'] = $v['title']?$v['title']:'';
                $arr[$k]['img'] = $v['img']?'http://attachment.shengyimao.com/'.$v['img']:'';
                $arr[$k]['publish_time'] = $v['publish_time']?date('Y-m-d',$v['publish_time']):'';
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
    public function article_Details(){
        $arr=array();
        $id = $this->input->post('did');
        if(!empty($id)){
            $result = $this->db->select('*')->where('id',$id)->get('blog_article')->result();
            $data["data"]=$result[0];
            $data["respcode"] = "000";
            show_json($data,'请求成功');
            exit;
        }else{
            $data["data"]=$arr;
            $data["respcode"] = "999";
            show_json($data,'参数不全');
            exit;
        }
    }
	

		
	public function article_add(){
		$arr = array();
		$title = trim($this->input->post('title'));
		$uid = trim($this->input->post('uid'));
		$img = trim($this->input->post('img'));
		$content = trim($this->input->post('content'));
		$publish_time = time();
		if($title =='' || $uid=='' || $img=='' || $publish_time=='' || $content==''){
			$data["data"]=$arr;
			show_json($data,'缺少参数');
			exit;
		}
		$result = $this->db->select('*')->where('uid',$uid)->get('blog_userinfo')->result();
		if(empty($result)){
			$data["data"]=$arr;
			show_json($data,'用户不存在');
			exit;
		}
		$data['title'] =  $title;
		$data['uid'] =  $uid;
		$data['img'] =  $img;
		$data['publish_time'] =  $publish_time;
		$this->db->insert('blog_article', $data);
		$last_id = $this->db->insert_id();
		 if($last_id>0){
			$data["data"]=$arr;
			$data["respcode"] = "000";
			show_json($data,'发布文章成功');
		}else{
			$data["data"]=$arr;
			$data["respcode"] = "401";
			show_json($data,'发布文章失败');
			
		}
	}
}