<?php
/**
 * Created by PhpStorm.
 * User: tcsd
 * Date: 2018/12/3
 * Time: 14:58
 * desc: 登录接口
 */

class ArticleAdd extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
	
	public function add(){
		$public_url = "http://127.0.0.1/CI/public";
		$url = "http://127.0.0.1/CI/";
		$param = array( 'url' => $url,'public_url'=> $public_url);
        $this->load->view('articleinfo',$param);
  
    }
	public function insert(){
		// print_r($_POST);
		// print_r($_FILES);
		
		$content = stripslashes(trim($_POST['content']));
		$content=$content?$content:'';
		//处理html中图片
		$imgpreg = '/<img.*?src="(.*?)".*?>/is';
		preg_match($imgpreg,$content,$match);
		if(!empty($match)){
			$img_url = parse_url($match[1]);
			$params['img'] = ltrim($img_url['path'],'/');
		}else{
			$params['img'] = '';
		}
		print_r($params);
		//$title = trim($this->input->post('title'));
    }
}