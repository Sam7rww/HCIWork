<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/11/29
 * Time: 下午5:13
 */
class regis_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addUser($name,$password,$email,$phone){
        $data = array(
            'username' => $name,
            'mail' => $email,
            'phone' => $phone,
            'password' => $password
        );
        $this->db->insert("user",$data);
        $data1 = array('username'=>$name);
        $this->db->insert("user_info",$data1);
    }

    public function log_in($username,$password,$email,$phone){
        $query = $this->db->query("select * from user where username= '".$username."' limit 1");
        $result = $query->result_array();

        if(empty($result))
        {           //数据库中没有改username
            $this->addUser($username,$password,$email,$phone,0,0);
//            $this->db->where('name',$username);
//            $data = array('last_login_time'=>date('Y-m-d h:i:s'));
//            $this->db->update('users',$data);
            return true;
        }
        else
        {
            return false;
        }

    }
}