<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/2
 * Time: 下午11:47
 */
class users extends CI_Controller
{
    static $search_res = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
        redirect('users/getuserinfo');
    }

    public function getuserinfo(){
        $name = $this->session->userdata('username');
        $phone = $this->session->userdata('phone');
        $email = $this->session->userdata('email');

        $data['info1'] = $this->user_model->getuserinfo($name);
//        $data['info2'] = array("phone"=>$phone,"email"=>$email);
        $data['info2'] = $this->user_model->get_phone_email($name);
        $this->load->view('user/user_info_main',$data);
    }

    public function starteditinfo(){
        $this->load->view('user/user_info_edit');
    }

    public function starteditpassword(){
        $this->load->view('user/user_password_edit');
    }

    public function startaddfriend(){
//        $name = $this->session->userdata('search_name');
//        $dec = $this->session->userdata('search_declaration');
//        if($name == null){
//            $data['search_res'] = null;
//        }else{
//            $data['search_res'] = array("search_username"=>$name,"search_declaration"=>$dec);
//        }
        $data['recommend'] = $this->recommend();
        $this->load->view('user/user_friend_add',$data);
//        $this->load->view('user/user_friend_add');
    }

    public function setuserinfo(){
        $name = $this->session->userdata('username');
        $sex = $_POST['sex'];
        if($sex == '男'){
            $sex = 0;
        }else{
            $sex = 1;
        }
        $age = $_POST['age'];
        $birth = $_POST['birth'];
        $star = $_POST['star'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $position = $_POST['position'];
        $school = $_POST['school'];
        $interest = $_POST['interest'];
        $declaration = $_POST['declaration'];
        $this->user_model->setuserinfo($name, $sex, $age, $birth, $star, $phone, $email, $position, $school, $interest, $declaration);
    }

    public function setpassword(){
        $name = $this->session->userdata('username');
        $past = $_POST['past'];
        $new = $_POST['new'];
        $new2 = $_POST['new2'];
        if($new == $new2){
            $result = $this->user_model->setpassword($name,$past,$new);
            if($result){
                echo '密码修改成功';
            }else{
                echo '密码修改失败,原密码错误';
            }
        }else{
            echo '新密码两次输入不同';
        }

    }

    public function getfriend(){
        $name = $this->session->userdata('username');
        $result['allfriend'] = $this->user_model->getfriend($name);
        $this->load->view('user/user_friend',$result);
    }

    public function search(){
        $myname = $this->session->userdata('username');
        $name = $_POST['username'];
        $res = $this->user_model->search($name,$myname);

        echo $res;
    }

    public function recommend(){
        $name = $this->session->userdata('username');
        $result = $this->user_model->recommend($name);
        return $result;
    }

    public function addfriend(){
        $name = $this->session->userdata('username');
        $friend = $_POST['Message'];
        $this->user_model->add_friend($name,$friend);
    }


}