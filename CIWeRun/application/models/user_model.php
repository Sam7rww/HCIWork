<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/3
 * Time: 上午1:01
 */
class user_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getuserinfo($name)
    {
        $result = $this->db->query("select * from user_info where user_info.username ='" . $name . "' limit 1");
        $row = $result->row_array();
        $sex = '';
        if ($row['sex'] == 0) {
            $sex = '男';
        } else {
            $sex = '女';
        }
        $result = array(
            "username" => $name, "sex" => $sex, "age" => $row['age'], "birth" => $row['birth'], "star" => $row['star'], "position" => $row['position'], "school" => $row['school'],
            "interest" => $row['interest'], 'declaration' => $row['declaration']
        );
        return $result;
    }

    public function get_phone_email($name){
        $result = $this->db->query("select * from user where user.username ='" . $name . "' limit 1");
        $row = $result->row_array();
        $result = array(
            "phone" =>$row['phone'],"email"=>$row['mail']
        );
        return $result;
    }

    public function setuserinfo($name, $sex, $age, $birth, $star, $phone, $email, $position, $school, $interest, $declaration)
    {
//        $result = $this->db->query("select * from user_info where user_info.username ='".$name."'");
        $this->db->get_where('user_info', array('username' => $name));
        $data = array('sex' => $sex, 'age' => $age, 'birth' => $birth, 'star' => $star, 'position' => $position, 'school' => $school, 'interest' => $interest, 'declaration' => $declaration);
        $this->db->where('username',$name);
        $this->db->update('user_info',$data);

        $this->db->get_where('user', array('username' => $name));
        $data1 = array('phone'=>$phone,'mail'=>$email);
        $this->db->where('username',$name);
        $this->db->update('user',$data1);
    }

    public function setpassword($name,$past,$new){
        $result = $this->db->query("select * from user where user.username ='".$name."'");
        $row = $result->row_array();
        if($past == $row['password']){
            $data = array('password'=>$new);
            $this->db->where('username',$name);
            $this->db->update('user',$data);
            return true;
        }else{
            return false;
        }
    }

    public function getfriend($name){
        $select = array();
        $result = $this->db->query("select * from friend where username = '".$name."'");
        while($row = $result->unbuffered_row('array')){
            $select[] = array("friend"=>$row['friend'],"declaration"=>$row['declaration']);
        }
        return $select;
    }

    public function search($name,$myname){
        $result = $this->db->query("select * from user_info where user_info.username ='".$name."'");
        $row = $result->row_array();
        if(!empty($row)){       //在所有用户中存在这个用户
            $data = array("username"=>$myname,"friend"=>$row['username'],"declaration"=>$row['declaration']);
            $res = $this->db->query("select * from friend where username = '".$myname."' and friend = '".$name."'");
            $row2 = $res->row_array();
            if(empty($row2)){       //好友列表中还未添加这个人
                $this->db->insert("friend",$data);
                return '添加成功';
            }else{
                return '已经添加过此人';
            }
        }else{
            return '无该用户';
        }
    }

    public function recommend($my_name){
        $select = array();
        $result = $this->db->query("select username from user where user.username !='".$my_name."' and user.username not in (select friend from friend) order by user.level desc limit 3");
        while($row = $result->unbuffered_row('array')){
            $find_name = $row['username'];
            $res = $this->db->query("select * from user_info where user_info.username ='".$find_name."'");
            $row1 = $res->row_array();
            $select[] = array("friend"=>$find_name,"declaration"=>$row1['declaration']);
        }
        return $select;

    }

    public function add_friend($name1,$name2){
        $res = $this->db->query("select * from user_info where user_info.username ='".$name2."'");
        $row1 = $res->row_array();
        $dec = $row1['declaration'];
        $data = array("username"=>$name1,"friend"=>$name2,"declaration"=>$dec);
        $this->db->insert("friend",$data);
    }
}