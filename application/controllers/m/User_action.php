<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_action extends CI_Controller{
        public function __construct() {
            parent::__construct();
            //加载格式化数据类
            $this->load->library('jsonformat');
            //加载用户模型
            $this->load->model('user_model');
            //引入公共类
            $this->load->library('utils');
        }
        public function index() {
            $this->load->view('index.html');
        }
        public function loginpage() {
            $this->load->view('login.html');
        }
        public function getcode() {
            //校验码
            $this->load->library('captcha');
            $this->captcha->create(); 
        }
        public function register() {
            $Fommat = $this->jsonformat;
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'ctime' => time(),
                'uid' => uniqid()
            );
            $valicode = $this->input->post('valicode');
            session_start();
            $sess_code = isset( $_SESSION['randcode'] ) ? $_SESSION['randcode'] : '';
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
            }
            // else if( md5( $valicode ) != $sess_code ) {
            //     echo $Fommat->result(array('keys' => '002|4'));
            //     return;
            // };
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
		//登录接口
        public function login() {
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
                $resultStr->token = $this->utils->encrypt_str( array( 'uid'=>$resultStr->uid ));
                echo $Fommat->result(array('keys' => '000|7','data'=>$resultStr));
            }
        }
        //微信登录
        public function wxregister() {
            $Fommat = $this->jsonformat;
            $code = $this->input->post('code');
            if( empty($code) ) {
                echo $Fommat->result(array('keys' => '003|9'));
                return;
            }
            $url = "https://api.weixin.qq.com/sns/jscode2session?appid=wx15662ba1602dcd97&secret=4acd6760a9e7076a5f5e3bc2659b7bf4&js_code=".$code."&grant_type=authorization_code";
            $result = $this->utils->curl_get_https( $url );
            if( !empty($result->openid) ) {
                echo $Fommat->result(array('keys' => '000|7','data'=>$result));
            }else{
                echo $Fommat->result(array('keys' => '003|10'));
            }
        }
    }
?>