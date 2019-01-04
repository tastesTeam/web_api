<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    //用户注册模型
    public function u_register( $data ) {
        //判断数据库是否存在该用户
        $issetUser = $this->db
        ->select('username')
        ->where('username',$data['username'])
        ->get('blog_userinfo');
        if( !empty($issetUser->result()) ) {
            return 'isset';
        };
        //存储用户
        $query = $this->db->insert( 'blog_userinfo',$data );
        $insertStatus = $query ? 'success' : 'fail';
        return $insertStatus;
    }
    //用户登录
    public function u_login( $data ) {
        $query = $this->db->select('*')
        ->where( $data )
        ->get('blog_userinfo');
        $result = $query->row();
        if( empty( $result ) ) {
            return 'notset';
        }else {
            //更新登录时间
            $this->db
            ->where( 'id',$result->id )
            ->update( 'blog_userinfo',array( 'logintime'=>date('Y-m-d')) );
            return $result;
        }
    }
}
?>