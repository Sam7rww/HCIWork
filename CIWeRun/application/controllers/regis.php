<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/11/29
 * Time: 下午2:52
 */
class regis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("regis_model");
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function index()
    {
//        $name = 'AAiur';
//        $email = '153839449@qq.com';
//        $phone = 18320483699;
//        $password = 'Ruanweiwei7';
//        $this->regis_model->addUser($name,$password,$email,$phone);
//        $this->load->view('register');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('e-mail', 'E-mail', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
//        $password2 = $this->input->post('password2');
        $email = $this->input->post('e-mail');
        $phone = $this->input->post('phone');
        if ($this->form_validation->run() == TRUE) {
            if ($this->check_database($username, $password,$email,$phone)) {
                redirect('Main_Page');
            } else {
                $this->load->view('register');
            }
        } else {
            $this->load->view('register');
        }
    }

    function check_database($username, $password, $email, $phone)
    {
        //Field validation succeeded.  Validate against database
        //query the database
        $result = $this->regis_model->log_in($username, $password, $email, $phone);
        if ($result) {
            $userinfo = array(
                'username' => $username,
                'phone' => $phone,
                'email' => $email,
                'password' => $password,
                'level'=>0,
                'Ep'=>0
            );
            $this->session->set_userdata($userinfo);


            return TRUE;
        } else {
            return false;
        }
    }
}