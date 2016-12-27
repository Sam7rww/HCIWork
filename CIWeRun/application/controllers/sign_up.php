<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/11/29
 * Time: 下午2:52
 */
class sign_up extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sign_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function index(){
//        $this->load->helper(array());
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $username =  $this->input->post('username');
        $password =  $this->input->post('password');

        if ($this->form_validation->run() == TRUE){
            if($this->check_database($username,$password)){
                redirect('Main_Page');
            }else{
                $this->load->view('sign');
            }
        }else{
            $this->load->view('sign');
        }
    }

    function check_database($username,$password)
    {
        //Field validation succeeded.  Validate against database
        //query the database
        $result = $this->sign_model->log_in($username, $password);
        if($result){
            foreach($result as $row)
            {
                $userinfo = array(
                    'username'=>$row['username'],
                    'phone'=>$row['phone'],
                    'email'=>$row['mail'],
                    'password'=>$row['password'],
                    'level'=>$row['level'],
                    'EP'=>$row['EP']
                );
                $this->session->set_userdata($userinfo);

            }
            return TRUE;
        }else{
            return false;
        }
    }
}