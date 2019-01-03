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
	
	
	 public function do_upload()
    {
        header("content-type:text/html;charset=utf-8");
        $config['upload_path']      = './upload/recommend';
        // 允许上传哪些类型
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        // 上传后的文件名，用uniqid()保证文件名唯一
        echo $config['file_name'] = uniqid();
        //var_dump($_FILES);
        // 加载上传库
		$config['max_size']=100;
        $config['max_width']=1024;
        $config['max_height']=768;
        $this->load->library('upload', $config);
        var_dump($this->upload->data());
        // 上传文件，这里的pic是视图中file控件的name属性
       // $result = $this->upload->do_upload('test');
        $a = $this->upload->display_errors('<p>', '</p>');
       var_dump($a);
        // 如果上传成功，获取上传文件的信息
        // if ($result)
        // {
            // var_dump($this->upload->data());
        // }
    }
	
	// public function article_add(){
		// $arr = array();
		// $title = trim($this->input->post('title'));
		// $uid = trim($this->input->post('uid'));
		
		// $config['upload_path']='./uploads/';
        // $config['allowed_types']='gif|jpg|png';
        // $config['max_size']=100;
        // $config['max_width']=1024;
        // $config['max_height']=768;

        // $this->load->library('upload',$config);
        // if(!$this->upload->do_upload('userfile')){
            // $error=array('error'=>$this->upload->display_errors());
            // $this->load->view('test',$error);        
        // }else{
            // $data=array('upload_data'=>$this->upload->data());
            // $this->load->view('upload_success',$data);
        // }
		
		
		
		// $img = trim($this->input->post('img'));
		// $publish_time = time();
		// if($title =='' || $uid=='' || $img=='' || $publish_time==''){
			// show_json($data,'缺少参数');
            // exit;
		// }
	// }
}