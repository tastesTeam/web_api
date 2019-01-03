<?php
/**
 * Created by PhpStorm.
 * User: tcsd
 * Date: 2018/12/3
 * Time: 14:58
 * desc: 登录接口
 */

class Upload extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("form","url"); 
    }

    public function index(){
        $this->load->view('test',array("error"=>''));
    }

    public function do_upload(){
		
        $config['upload_path']='./upload/recommend';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']=100;
        $config['max_width']=1024;
        $config['max_height']=768;
		$config['file_name']  = time(); //文件名不使用原始名
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('userfile')){
               echo $this->upload->display_errors();    
        }else{
             $data['upload_data']=$this->upload->data();  //文件的一些信息
             $img=$data['upload_data']['file_name'];  //取得文件名

             echo $img;

             // foreach($data['upload_data'] as $item => $value){
             // echo $item.":".$value."<br>";
			// }
		}
	}
}