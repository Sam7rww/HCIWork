<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/11/28
 * Time: 下午5:58
 */
class Main_Page extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("main_model");
        $this->load->helper('url_helper');
        $this->load->library('session');
}
    public function index(){
        $name = $this->session->userdata('username');
        $phone = $this->session->userdata('phone');
        $email = $this->session->userdata('email');
        $level = $this->session->userdata('level');
        $EP = $this->session->userdata('EP');

        $data['main_info'] = array('name'=>$name,'phone'=>$phone,'email'=>$email,'level'=>$level,'EP'=>$EP);
        $data['allDynamic'] = $this->getDynamic();
        $this->load->view('headbar',$data);
        $this->load->view('main_page',$data);
    }

    public function getDynamic(){
//        $name = $this->session->userdata('username');
        $result = $this->main_model->getDynamic();
        return $result;
    }

    public function setDynamic(){
        $dynamic = $_POST['Message'];
        $name = $this->session->userdata('username');
        $this->main_model->addDynamic($name,$dynamic);
//        $this->load->view('main_page');
    }

    public function addgood(){
        $time = $_POST['Message'];
        echo $time;
        $this->main_model->addGood($time);
//        $this->load->view('main_page');
    }
}