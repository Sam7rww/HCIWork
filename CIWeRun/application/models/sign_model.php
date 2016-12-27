<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/11/29
 * Time: 下午8:58
 */
class sign_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //验证账户
    public function validate($username,$password){
//        $inputUserName=$this->input->post('accountText');
//        $inputPassword=$this->input->post('passwordText');
        $this->load->database();/*load db*/
        if($this->db->table_exists('user')) {
            $sql = "select username from user where username='$username' and password='$password' limit 1;";
            $query = $this->db->query($sql);

            if (count($query->result())>0 &&
                $query->result()[0]->username == $username) {
                return true;
            }
        }
        else{
            return 'user表不存在,无法验证身份';
        }
        return false;
    }

    //验证账户
    public function log_in($username,$password){
        $query = $this->db->query("select * from user where username= '".$username."' and password= '".$password."' limit 1");
        $result = $query->result_array();

        if(!empty($result))
        {
//            $this->db->where('name',$username);
//            $data = array('last_login_time'=>date('Y-m-d h:i:s'));
//            $this->db->update('users',$data);
            return $result;
        }
        else
        {
            return false;
        }

    }
}