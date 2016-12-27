<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/11/30
 * Time: 下午8:54
 */
class activity extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("activity_model");
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
        redirect('activity/getfromMyAct');
    }
    //我参加的活动
    public function getMyAct(){
        $name = $this->session->userdata('username');
        $res['allAct'] = $this->activity_model->findMyAct($name);
        $this->load->view('activity/act_headbar');
        $this->load->view('activity/activity_in',$res);
//        return $res;
    }
    //我举行的活动
    public function getfromMyAct(){
        $name = $this->session->userdata('username');
        $res['allAct']  =$this->activity_model->fromMyAct($name);
        $this->load->view('activity/act_headbar');
        $this->load->view('activity/activity_my',$res);
//        return $res;
    }

    //所有我可以参加的活动
    public function getallAct(){
        $name = $this->session->userdata('username');
        $res['allAct'] = $this->activity_model->allAct($name);
        $this->load->view('activity/act_headbar');
        $this->load->view('activity/activity_all',$res);
    }

    //所有我参加过的活动
    public function gethisAct(){
        $name = $this->session->userdata('username');
        $res['allAct'] = $this->activity_model->hisAct($name);
//        $res['allAct2'] = $this->activity_model->hisAct2($name);
        $this->load->view('activity/act_headbar');
        $this->load->view('activity/activity_histry',$res);
    }

    //发布活动
    public function newAct(){
        $name = $this->session->userdata('username');
        $theme = $_POST['theme'];
        $position = $_POST['position'];
        $time = $_POST['time'];
        $info = $_POST['info'];
        $this->activity_model->createAct($name,$theme,$time,$position,$info);
//        $this->load->view('activity_my');
    }
//    public function
}