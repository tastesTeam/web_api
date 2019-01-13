
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jsonformat {
    public function __construct( $keyWord=[] ) {
        /**
         * 定义返回数据的常用语
         */
        $keys = array(
            '0' => '请输入密码', 
            '1' => '请输入用户名', 
            '2' => '用户名已存在', 
            '3' => '校验码不能为空',
            '4' => '校验码错误',
            '5' => '注册成功',
            '6' => '注册失败',
            '7' => '登录成功',
            '8' => '用户名或密码有误',
            '9' => '参数错误',
            '10' => '无效的code参数',
            '11' => '数据获取失败',
            '12' => '登录失败'
        );
        $this->msgKeyword = array_merge( $keys,$keyWord );
    }
    /**
     * $params 返回数据的格式化参数
     */
    public function result( $params ) {
        if( empty( $params['keys'] ) ) return;
        $keyMap = explode( "|",$params['keys'] );
        $resJson = array(
            'code' => $keyMap[0],
            'data' => empty( $params['data'] ) ? (object)[] : $params['data'],
            'msg' => $this->msgKeyword[ $keyMap[1] ]
        );
        return json_encode( $resJson );
    }
}
?>