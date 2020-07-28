<?php
class Datawork extends CI_model{
    public function insert_data($table,$fields){
        $this->db->insert($table,$fields);
    }
    public function calling($table){
        $data=$this->db->get($table);
        return $data->result();
    }
    public function calling_onedata($table,$cond){
        $data =$this->db->where($cond)->get($table);
        return $data->result();
    } 
    public function search($table,$cond){
        $data =$this->db->like($cond)->get($table);
        return $data->result();
    }
    
}
?>