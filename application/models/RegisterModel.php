<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_model{

    public function insertDetails($details){
        $res=$this->db->insert('studentdetails',$details);
        return $this->db->insert_id();
    }

    public function getstudentdetails(){
      $this->db->select('a.*,b.course_name,c.speciallization_name,ifnull(GROUP_CONCAT(e.sports_name),"nosports") as sports');
      $this->db->from('studentdetails a');
      $this->db->join('course b','b.course_id=a.course','left');
      $this->db->join('specialization c','c.specialization_id=a.specialization','left');
      $this->db->join('sports_student d','d.student_id=a.student_id','left');
      $this->db->join('sports e','e.sports_id=d.sports_id','left');
      $this->db->group_by('a.student_id');
      $res=$this->db->get()->result_array();
      return $res;
    }

    public function getstudentdetailsbystudentid($studentId){
      $this->db->where('student_id',$studentId);
      $res=$this->db->get('studentdetails')->result_array();
      return $res;
    }

}

?>
