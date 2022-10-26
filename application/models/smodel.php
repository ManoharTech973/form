<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class smodel extends CI_model{

    public function insertDetails($details){
        $res=$this->db->insert('specialization',$details);
        return $res;
    }

    public function getSpecilizationList()
    {
        $this->db->select('a.specialization_id,a.speciallization_name,b.course_name');
        $this->db->from('specialization a');
        $this->db->join('course b','b.course_id=a.course_id');
        $result=$this->db->get()->result_array();
        return $result;

    }

   public function getSpecializationListByCourseId($courseId){
        $this->db->select('a.specialization_id,a.speciallization_name');
        $this->db->from('specialization a');
        $this->db->where('a.course_id',$courseId);
        $result=$this->db->get()->result_array();
        return $result;
   }

   public function getSpecilizationById($specializationId)
   {
       $this->db->select('a.specialization_id,a.speciallization_name,a.course_id');
       $this->db->from('specialization a');
       $this->db->where('a.specialization_id',$specializationId);
       $result=$this->db->get()->result_array();
       return $result;

   }

   public function updatespecialization($specialization_name,$specialization_id,$course_name){
     $this->db->set('speciallization_name',$specialization_name);
     $this->db->set('course_id',$course_name);
     $this->db->where('specialization_id',$specialization_id);
     $res=$this->db->update('specialization');
     return $res;

   }


}
?>
