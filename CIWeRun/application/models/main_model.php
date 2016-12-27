<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/2
 * Time: 上午11:00
 */
class main_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addDynamic($name, $info)
    {
        $data = array(
            'username' => $name,
            'moving' => $info,
            'good' => 0,
            'time' => date('Y-m-d h:i:s')
            );
        $this->db->insert("dynamic",$data);
    }

    public function getDynamic(){
        $select = array();
        $query = $this->db->query("select * from dynamic ORDER BY dynamic.time DESC limit 3");
        while($row = $query->unbuffered_row('array')){
            $select[] = array("username"=>$row['username'],"moving"=>$row['moving'],"good"=>$row['good'],"time"=>$row['time']);
        }
        return $select;
    }

    public function addGood($time){
        $result = $this->db->query("select * from dynamic where dynamic.time ='".$time."'");
        $row = $result->row_array();
        $good = $row['good'];
        $good = $good+1;
        $this->db->where('time',$time);
        $data = array('good'=>$good);
        $this->db->update('dynamic',$data);
    }
}