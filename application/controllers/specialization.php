<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class specialization extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('smodel');
		$this->load->model('CourseModel');

	}

    public function index(){

		if($_POST)
		{
			$this->form_validation->set_rules("sname","Specialization Name",'trim|required');


		if($this->form_validation->run()){

			$insarray=array("speciallization_name" => $_POST['sname'],"course_id" => $_POST['course_name']);

			$res=$this->smodel->insertDetails($insarray);
			if($res==1)
			{
			$message=array('status' => 1,"message" => "Registered Sucessfully");
			$this->session->set_flashdata('alerts',$message);
			$this->form_validation->reset_validation();
			$_POST=[];
			}
			else
			{
				$message=array('status' => 2,"message" => "Something went wrong");
				$this->session->set_flashdata('alerts',$message);
			}

		}
	}

	$data['courses']=$this->CourseModel->getDetails();
    $data['slists']=$this->smodel->getSpecilizationList();
    $this->load->view('header');
	$this->load->view('specialization',$data);
	$this->load->view('sscripts');
	$this->load->view('commonscripts');
	$this->load->view('footer');

}

public function getSpecializationByCourseId(){
	$courseId=$_POST['course_id'];
	$data=$this->smodel->getSpecializationListByCourseId($courseId);
	echo json_encode($data);

}



public function editspecialization($specializationId){
	if($_POST){
		$specialization_id=$_POST['sid'];
		$specialization_name=$_POST['sname'];
		$course_name=$_POST['course_name'];
		$res=$this->smodel->updatespecialization($specialization_name,$specialization_id,$course_name);
		if($res==1){
			$message=array('status'=>1,"message"=>"Updated Sucessfully");
			$this->session->set_flashdata('alerts',$message);
			$this->form_validation->reset_validation();
			$_POST=[];
			redirect(base_url()."index.php/specializationdetailsctrl/index");
		}
		else{
			$message=array('status'=>2,"message"=>"Something went wrong");
			$this->session->set_flashdata('alerts',$message);
		}
	}
	$data['specializations']=$this->smodel->getSpecilizationById($specializationId);
	$data['courses']=$this->CourseModel->getcoursedetails();

	$this->load->view('header');
	$this->load->view('editspecialization',$data);
	$this->load->view('sscripts');
	$this->load->view('commonscripts');
	$this->load->view('footer');
}

}
?>
