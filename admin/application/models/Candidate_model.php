<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Candidate_model extends CI_Model {

    function __construct()
    {
// Call the Model constructor
        parent::__construct();
    }

    function get_candidate($id)
    {
        $query = $this->db->get_where('app_candidate', array('id' => $id), 1);
        $data =$query->row_array();
//echo $this->db->last_query();
        return $data;
    }

    function insert_candidate($data)
    {
        $this->db->insert('app_candidate', $data);
        $insert_id = $this->db->insert_id();
        if($this->db->affected_rows() != 1)
        {
            return 0;
        }
        else
        {
            return  $insert_id;
        }
    }


    function count_candidate()
    {
        $sql=" select  app_candidate.*  from   app_candidate ";
        $query = $this->db->query($sql);
        return $rowcount = $query->num_rows();
    }

    function count_candidategender_event($event,$gender)
    {
        $sql=" select  count(id)  from   app_candidate where event=".$event." and ";
        $query = $this->db->query($sql);
        return $rowcount = $query->num_rows();
    }
    public function pagination_select_candidate($limit, $page=null)
    {
        $sql="select  app_candidate.*,(select title from app_event where id=app_candidate.event) as eventname from   app_candidate "
            ." order by  app_candidate.id desc limit ".$page." ,".$limit."  ";
        $query = $this->db->query($sql);
        $data =$query->result_array();
        return $data;
    }

    public function select_all_candidate()
    {
        $sql="select  app_candidate.* from   app_candidate "
            ." order by  app_candidate.id desc  ";
        $query = $this->db->query($sql);
        $data =$query->result_array();
        return $data;
    }
 public function get_all_candidate_event($event)
    {
        $sql="select  app_candidate.*,(select count(id) from app_votes where candidate=app_candidate.id and event=app_candidate.event) as votes from   app_candidate where  event=".$event
            ." order by  app_candidate.id desc  ";
        $query = $this->db->query($sql);
        $data =$query->result_array();
        return $data;
    }
    function delete_candidate($id){
        $this->db->where('id', $id);
        $this->db->delete('app_candidate');
        return ($this->db->affected_rows() != 1) ? false : true;
    }


    function update_candidate($data,$id)
    {

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('app_candidate', $data);
//echo $this->db->last_query();
        return ($this->db->affected_rows() != 1) ? false : true;

//return $rowcount = $query->num_rows();
    }



}
