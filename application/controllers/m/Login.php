<?php
/**
 * Created by PhpStorm.
 * User: tcsd
 * Date: 2018/12/3
 * Time: 14:58
 * desc: 登录接口
 */

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function User_Register(){
        $arr = array();
        $login_name = trim($this->input->post('username'));
        $login_password = trim($this->input->post('password'));
        if(empty($login_name) || empty($login_password)){
            $data["data"]=$arr;
            $data["respcode"] = "411";
            show_json($data,'缺少参数');
            exit;
        }else{
            $result = $this->db->select('login_name')->where('login_name',$login_name)->get('t_admin_user')->result();
            if(!empty($result)){
                $result_arr = object_to_array($result);
                if($result_arr['user_name'] == $login_name){
                    $data["data"]=$arr;
                    $data["respcode"] = "400";
                    show_json($data,'用户名重复');
                }
            }
            $data['login_name'] =  $login_name;
            $data['login_password'] =  md5($login_password);
            $data['last_time'] =  time();
            $this->db->insert('t_admin_user', $data);
            $last_id = $this->db->insert_id();
            if($last_id>0){
                $data["data"]=$arr;
                $data["respcode"] = "000";
                show_json($data,'注册成功');
            }
        }
    }

    public function User_login(){
        $arr = array();
        $login_name = trim($this->input->post('username'));
        $login_password = md5(trim($this->input->post('password')));
        if(empty($login_name) || empty($login_password)){
            $data["data"]=$arr;
            $data["respcode"] = "411";
            show_json($data,'缺少参数');
            exit;
        }else{
            $where = ' login_name="'.$login_name.'" and login_password = "'.$login_password.'" ' ;
            $user_result = $this->db->get_where('t_admin_user',$where)->result();
            if(empty($user_result)){
                $data["data"]=$arr;
                $data["respcode"] = "444";
                show_json($data,'请输入正确的账号和密码');
            }else{
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['user_id']=$user_result['id'];
                $arr['login_name'] = $login_name;
                $arr['uid'] = $user_result['id'];
                $data["data"]=$arr;
                $data["respcode"] = "000";
                show_json($data,'登录成功');
            }
        }
    }
}
