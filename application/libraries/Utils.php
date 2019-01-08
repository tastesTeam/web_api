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
   * @ $rev_object
   * @ 类型object
   * @ param { token,uid } token和用户id
   * @ 返回 bool值 true token已过期 false 未过期
   */
  public function validate_token( $rev_object ) {
    $expireTimer = explode( '-',$this->decrypt_str( $rev_object['token'] ) );
    return time() > $expireTimer[0] || $expireTimer[1] != $rev_object['uid']  ? true : false;
  }
  /**
   * curl 发送https 的 post，get方法
   * @param $url 请求地址
   * @param $data post 请求的数据
   * @param $method 请求的方式
   */
  public function curl_get_https($url){
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
    $tmpInfo = curl_exec($curl);     //返回api的json对象
    //关闭URL请求
    curl_close($curl);
    return $tmpInfo;    //返回json对象
  }
  public function curl_post_https($url,$data){ // 模拟提交数据函数
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
    $tmpInfo = curl_exec($curl); // 执行操作
    if (curl_errno($curl)) {
        echo 'Errno'.curl_error($curl);//捕抓异常
    }
    curl_close($curl); // 关闭CURL会话
    return $tmpInfo; // 返回数据，json格式
  }
}
?>