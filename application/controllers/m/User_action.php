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
            //微信返回code
            $code = $this->input->post('code');
            //微信返回的用户加密数据
            $encryptedData = $this->input->post('encryptedData');
            //加密向量
            $iv = $this->input->post('iv');
            //签名
            $signature = $this->input->post('signature');
            //加密数据
            $rawData = $this->input->post('rawData');
            //根据code获取openid session_key
            if( empty($code) ) {
                echo $Fommat->result(array('keys' => '003|9'));
                return;
            }
            $url = "https://api.weixin.qq.com/sns/jscode2session?appid=wx15662ba1602dcd97&secret=4acd6760a9e7076a5f5e3bc2659b7bf4&js_code=".$code."&grant_type=authorization_code";
            $result = $this->utils->curl_get_https( $url );
            var_dump( $result );
            if( !empty($result->openid) ) {
                //如果签名数据存在校验数据的完整性
                if( !empty($signature) ) {
                    if( sha1($rawData.$result->session_key) == $signature ) {
                        //引入微信数据解密类
                        $this->load->library('wxcrypt',array('appid'=>'wx15662ba1602dcd97','session_key'=>$result->session_key));
                        $errCode = $this->wxcrypt->decryptData($encryptedData, $iv, $data);
                        if ($errCode == 0) {
                            //将js json字符串转换成php对象格式
                            $data = json_decode( $data );
                            //将对象中的watermark对象删除
                            unset( $data->watermark );
                            $this->user_model->wx_u_register( $data ); 
                        } else {
                            echo $Fommat->result(array('keys' => '003|11'));
                        }
                    }else{
                        echo $Fommat->result(array('keys' => '003|10','data'=>$result));
                    }
                }else{

                } 
                //echo $Fommat->result(array('keys' => '000|7','data'=>$result));
            }else{
                echo $Fommat->result(array('keys' => '003|10'));
            }
        }
    }
?>