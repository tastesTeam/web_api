
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jsonformat {
    public function __construct( $keyWord=[] ) {
        /**
         * 定义返回数据的常用语
         */
        $keys = array(
            '请输入密码！',
            '请输入用户名！',
            '用户名已存在！',
            '校验码不能为空！',
            '校验码错误！',
            '注册成功！',
            '注册失败！',
            '登录成功！',
            '用户不存在！'
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