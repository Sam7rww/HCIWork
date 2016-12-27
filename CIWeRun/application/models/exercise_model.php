<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/4
 * Time: 上午2:01
 */
class exercise_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getbody(){
        $result = $this->db->query("");
    }
}