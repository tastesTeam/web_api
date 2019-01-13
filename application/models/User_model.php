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
        //密码md5加密处理
        $data['password'] = md5( $data['password'] );
        //存储用户
        $query = $this->db->insert( 'blog_userinfo',$data );
        $insertStatus = $query ? 'success' : 'fail';
        return $insertStatus;
    }
    //用户登录
    public function u_login( $data ) {
        //密码md5加密处理
        $data['password'] = md5( $data['password'] );
        $query = $this->db->select('uid,username,avatar,ctime,logintime,level,des')
        ->where( $data )
        ->get('blog_userinfo');
        $result = $query->row();
        if( empty( $result ) ) {
            return 'notset';
        }else {
            //更新登录时间
            $query = $this->db
            ->where( 'uid',$result->uid )
            ->update( 'blog_userinfo',array( 'logintime'=>time()) );
            if( $query ) {
                //格式化时间
                $result->ctime = date('Y/m/d H:i:s',$result->ctime);
                $result->logintime = date('Y/m/d H:i:s',$result->logintime);
                return $result;
            }
            
        }
    }
    //微信小程序用户快捷登录
    public function wx_u_register( $data ) {
        //判断数据库是否存在该用户，没有则插入用户数据，如果存在则返回数据
        $query = $this->db->select('openId')
        ->where('openId',$data['openId'])
        ->get('blog_wx_userinfo');
        $result = $query->row();
        if( empty( $result ) ) {
            $data['ctime'] = time();
            $data['logintime'] = time();
            $bool = $this->db->insert('blog_wx_userinfo',$data);
            return $bool ? true : false;
        }else {
            //更新登录时间
            $bool = $this->db
            ->where( 'openId',$data['openId'] )
            ->update( 'blog_wx_userinfo',array( 'logintime'=>time()) );
            return $bool ? true : false;
        }
    }
}
?>