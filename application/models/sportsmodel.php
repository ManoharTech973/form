<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class sportsmodel extends CI_model{

public function insertDetails($details){
    $res=$this->db->insert('sports',$details);
    return $res;
}

public function getdetails(){
    $res=$this->db->get('sports')->result_array();
    return $res;
}

public function insertStudentSports($data){
 $res=$this->db->insert('sports_student',$data);
 return $res;

}
public function getsportsdetailsbysports($sportsid){
  $this->db->select('sports_id,sports_name');
  $this->db->from('sports');
  $this->db->where('sports_id',$sportsid);
  $res=$this->db->get()->result_array();
  return $res;

}

public function updatesportsdetails($sports_id,$sports_name){
  $this->db->set('sports_name',$sports_name);
  $this->db->where('sports_id',$sports_id);
  $res=$this->db->update('sports');
  return $res;
}
}
?>
