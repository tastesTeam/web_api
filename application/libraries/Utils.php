<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 定义公共，模块
 */
class Utils {
 
  public function __construct() {
    //引入加密类
    $this->CI =& get_instance();
    $this->CI->load->library('encrypt');
    $this->CI->load->library('encryption');
  }
  /**
   * @ $setTime (token的有效期)
   */
  public function exprieTime( $setTime ) {
    return time() + ( $setTime*86400 );
  }
  /**
   * 
   * @加密方法 默认AES 128bit CBC加密
   * @ $en_object 为对象格式
   * @ uid 用户id
   * @ time 为设置的过期时间 例: time=>1为明天的当前时间
   * 
   */
  public function encrypt_str( $en_object ) {
    //加密拼接字符串
    $timer = isset( $en_object['time'] ) ? $en_object['time'] : 1;
    $code_str = $this->exprieTime( $timer )."-".$en_object['uid'];
    echo $code_str.'<br>';
    //返回加密字符串
    return $this->CI->encrypt->encode( $code_str );
  }
  /**
   * 解密方法
   * @ $decode_str （接收客户端token）
   */
  public function decrypt_str( $decode_str ) {
    return $this->CI->encrypt->decode( $decode_str );
  }
  /**
   * 验证token的有效性
   * @ $token_str (客户端传入的token)
   * @ 返回 bool值 true token已过期 false 未过期
   */
  public function validate_token( $token_str ) {
    $expireTimer = explode( '-',$this->decrypt_str( $token_str ) );
    return time() > $expireTimer[0] ? true : false;
  }
}
?>