<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('CourseModel');

	}

public function index(){


	if($_POST)
		{
			$this->form_validation->set_rules("course_name","course Name","trim|required");


		if($this->form_validation->run()){

			$insarray=array("course_name" => $_POST['course_name']);
			$this->load->model('CourseModel');
			$res=$this->CourseModel->insertDetails($insarray);
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

	$this->load->view('header');
	$this->load->view('course');
	$this->load->view('coursescripts');
	$this->load->view('commonscripts');
	$this->load->view('footer');


}

public function editcourse($courseid){

 if($_POST){
	 $course_id=$_POST['course_id'];
	 $course_name=$_POST['course_name'];

	 $res=$this->CourseModel->updatacoursedetails($course_id,$course_name);
	 if($res==1)
 	{
 	$message=array('status' => 1,"message" => "Updated Sucessfully");
 	$this->session->set_flashdata('alerts',$message);
 	$this->form_validation->reset_validation();
 	$_POST=[];
	redirect(base_url()."index.php/coursedetailsctrl/index");
 	}
 	else
 	{
 		$message=array('status' => 2,"message" => "Something went wrong");
 		$this->session->set_flashdata('alerts',$message);
 	}

 }

$data['coursedetails']=$this->CourseModel->getcoursedetailsbycourse($courseid);

	$this->load->view('header');
	$this->load->view('editcourse',$data);
	$this->load->view('coursescripts');
	$this->load->view('commonscripts');
	$this->load->view('footer');
}



}
?>
