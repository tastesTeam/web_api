<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_action extends CI_Controller{
        public function __construct() {
            parent::__construct();
            //加载格式化数据类
            $this->load->library('jsonformat');
            //加载用户模型
            $this->load->model('user_model');
            //引入加密类
            $this->load->library('encrypt');
        }
        public function getcode() {
            $this->load->library('captcha');
            $this->captcha->create(); 
        }
        public function register() {
            $Fommat = $this->jsonformat;
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'ctime' => date('Y-m-d'),
                'uid' => uniqid()
            );
            $valicode = $this->input->post('valicode');
            session_start();
            //判断数据是否符合要求
            if( empty($data['username']) ) {
                echo $Fommat->result(array('keys' => '001|1'));
                return;
            }else if( empty($data['password']) ) {
                echo $Fommat->result(array('keys' => '001|0'));
                return;
            }else if( empty($valicode) ) {
                echo $Fommat->result(array('keys' => '001|3'));
                return;
            }else if( md5( $valicode ) != $_SESSION['randcode'] ) {
                echo $Fommat->result(array('keys' => '002|4'));
                return;
            };
            //判断是否存在用户名
            $resultStr = $this->user_model->u_register( $data );
            switch ( $resultStr ) {
                case 'isset' : 
                    echo $Fommat->result(array('keys' => '003|2'));
                break;
                case 'success' : 
                    echo $Fommat->result(array('keys' => '000|5'));
                break;
                case 'fail' : 
                    echo $Fommat->result(array('keys' => '004|6'));
                break;
            };
        }
        public function login() {
            //登录逻辑
            phpinfo();
            $Fommat = $this->jsonformat;
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            if( empty($data['username']) ) {
                echo $Fommat->result(array('keys' => '001|1'));
                return;
            }else if( empty($data['password']) ) {
                echo $Fommat->result(array('keys' => '001|0'));
                return;
            }
            $resultStr = $this->user_model->u_login( $data );
            if( $resultStr == 'notset' ) {
                echo $Fommat->result(array('keys' => '003|8'));
            }else {
                //加密获取token返回给客户端登录信息
                $encryString  = (time()+86400).'-'.$resultStr->uid;
                $resultStr->token = $this->encrypt->encode( $encryString );  
                echo $Fommat->result(array('keys' => '000|7','data'=>$resultStr));
            }
        }
    }
?>