<?php
/**
 * Created by PhpStorm.
 * User: tcsd
 * Date: 2018/12/3
 * Time: 14:58
 * desc: 登录接口
 */

class ArticleLike extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Create_Like(){
        $arr = array();
        if(!empty($_SESSION["user_id"])){
            $userid=$_SESSION["user_id"];
            $did = $this->input->post('did');
            $is_dele = $this->input->post('is_dele');



        }else{
            $data["respcode"] = "211";
            show_json($data,'请登录');
        }
    }

}