<?php

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 2016/12/4
 * Time: 下午12:13
 */
class compete_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function findMyAct($name){
        $select = array();
        $sql = "select * FROM [compete_my] WHERE [username] = '".$name."'  AND [over] = 0 limit 4";
        $res = $this->db->query($sql);
        while($row = $res->unbuffered_row('array')){
            $select[] = array("com_name"=>$row['com_name'],"man"=>$row['man'],"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
        }
//        while($row = sqlite_fetch_array($res)){
//            $select[] = array("act_name"=>$row['act_name'],"man"=>$row['man'],"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
//
//        }
        return $select;
    }

    /*
     * 找到所有我举行的活动
     */
    public function fromMyAct($name){
        $select = array();
        $sql = "select * from [compete_all] WHERE [man] = '".$name."' AND [over] = 0 limit 4";
        $res = $this->db->query($sql);
        while($row = $res->unbuffered_row('array')){
            $select[] = array("com_name"=>$row['com_name'],"man"=>$name,"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
        }
        return $select;
    }

    /*
     * 找到所有我可以参加的活动
     */
    public function allAct($name){
        $select = array();
        $sql = "select * FROM [compete_all] WHERE [man] != '".$name."'  AND [over] = 0 limit 4";
        $res = $this->db->query($sql);
        while($row = $res->unbuffered_row('array')){
            $select[] = array("com_name"=>$row['com_name'],"man"=>$row['man'],"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
        }
        return $select;
    }

    /*
     * 找到参加过的历史活动
     */
    public function hisAct($name){
        $select = array();
        $sql = "select * FROM [compete_all] WHERE [man] = '".$name."'  AND [over] = 1 limit 2";    //我曾经举行的活动,现已经结束
        $res = $this->db->query($sql);
        while($row = $res->unbuffered_row('array')){
            $select[] = array("com_name"=>$row['com_name'],"man"=>$row['man'],"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
        }
        $res2 = $this->db->query("select * FROM [compete_my] WHERE [username] = '".$name."'  AND [over] = 1 limit 4");      //我曾参加的现已经结束的活动
        while($row = $res2->unbuffered_row('array')){
            $select[] = array("com_name"=>$row['com_name'],"man"=>$row['man'],"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
        }

        return $select;
    }

    public function hisAct2($name){
        $select = array();
        $res2 = $this->db->query("select * FROM [compete_my] WHERE [man] = '".$name."'  AND [over] = 1 limit 2");      //我曾参加的现已经结束的活动
        while($row = $res2->unbuffered_row('array')){
            $select[] = array("com_name"=>$row['com_name'],"man"=>$row['man'],"time"=>$row['time'],"position"=>$row['position'],"num"=>$row['num'],"info"=>$row['info']);
        }
        return $select;
    }

    /*
     * 创建一个新活动
     */
    public function createAct($name,$theme,$time,$position,$info){
        $data = array(
            'com_name'=>$theme,
            'man'=>$name,
            'time'=>$time,
            'position'=>$position,
            'num'=>1,
            'info'=>$info,
            'over'=>0
        );
        $this->db->insert('compete_all',$data);
    }

}