<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/3
 * Time: 下午3:56
 */
class user_find extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    public function index(){
        $name = $_POST['username'];
        $res = $this->user_model->search($name);
        if($res){
            $data['search_res'] = $res;
            $this->load->view('user/user_friend_add',$data);
        }else{
            $data['search_res'] = null;
            $this->load->view('user/user_friend_add',$data);
        }
    }
}