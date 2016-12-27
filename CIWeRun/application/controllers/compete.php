<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/4
 * Time: 下午12:11
 */
class compete extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('compete_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
        redirect('compete/getfromMyCom');
    }
    //我参加的活动
    public function getMyCom(){
        $name = $this->session->userdata('username');
        $res['allAct'] = $this->compete_model->findMyAct($name);
        $this->load->view('compete/com_headbar');
        $this->load->view('compete/compete_in',$res);
//        return $res;
    }
    //我举行的活动
    public function getfromMyCom(){
        $name = $this->session->userdata('username');
        $res['allAct']  =$this->compete_model->fromMyAct($name);
        $this->load->view('compete/com_headbar');
        $this->load->view('compete/compete_my',$res);
//        return $res;
    }

    //所有我可以参加的活动
    public function getallCom(){
        $name = $this->session->userdata('username');
        $res['allAct'] = $this->compete_model->allAct($name);
        $this->load->view('compete/com_headbar');
        $this->load->view('compete/compete_all',$res);
    }

    //所有我参加过的活动
    public function gethisCom(){
        $name = $this->session->userdata('username');
        $res['allAct'] = $this->compete_model->hisAct($name);
//        $res['allAct2'] = $this->activity_model->hisAct2($name);
        $this->load->view('compete/com_headbar');
        $this->load->view('compete/compete_histry',$res);
    }

    //发布活动
    public function newCom(){
        $name = $this->session->userdata('username');
        $theme = $_POST['theme'];
        $position = $_POST['position'];
        $time = $_POST['time'];
        $info = $_POST['info'];
        $this->compete_model->createAct($name,$theme,$time,$position,$info);
//        $this->load->view('activity_my');
    }

}