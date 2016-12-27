<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/3
 * Time: 下午6:20
 */
class exercise extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('exercise/exercise_my');
    }

    public function my_body(){
        $data['BMI'] = null;
        $this->load->view('exercise/exercise_body',$data);
    }
    public function my_body2(){
        $data['BMI'] = $this->session->userdata('bMI');
        $this->load->view('exercise/exercise_body',$data);
    }

    public function my_sleep(){
        $this->load->view('exercise/exercise_sleep');
    }

    public function my_follow(){
        $this->load->view('exercise/exercise_follow');
    }

    public function BMI(){
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $BMI = ($weight/($height*$height))*10000;
        $data = array('bMI'=>$BMI);
        $this->session->set_userdata($data);
        echo $BMI;
    }

}