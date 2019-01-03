<?php
/**
 * Created by PhpStorm.
 * User: tcsd
 * Date: 2018/12/3
 * Time: 14:58
 * desc: 登录接口
 */

class Love extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
	
	public function wedding(){
		$param = array( 'url' => $this->ROOT_URL );
        $this->load->view('blogview',$param);
  
    }
}