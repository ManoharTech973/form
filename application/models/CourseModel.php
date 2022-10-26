<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class CourseModel extends CI_model{

    public function insertDetails($details){
        $res=$this->db->insert('course',$details);
        return $res;
    }

    public function getDetails(){
        $res=$this->db->get('course')->result_array();
        return $res;
    }

    public function getcoursedetails(){
      $this->db->select('course_id,course_name');
      $this->db->from('course');
      $res=$this->db->get()->result_array();
      return $res;
    }

    public function getcoursedetailsbycourse($courseid){
      $this->db->select('course_id,course_name');
      $this->db->from('course');
      $this->db->where('course_id',$courseid);
      $res=$this->db->get()->result_array();
      return $res;

    }

    public function updatacoursedetails($course_id,$course_name){
      $this->db->set('course_name',$course_name);
      $this->db->where('course_id',$course_id);
      $res=$this->db->update('course');
      return $res;
    }
}
?>
