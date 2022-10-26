<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


public function __construct(){

	parent::__construct();
	$this->load->model('RegisterModel');
	$this->load->model('CourseModel');
	$this->load->model('smodel');
	$this->load->model('sportsmodel');

}



public function index(){

	
	if($_POST)
		{
			
			$photoDetails=array();
			$photoerror=array();
			$this->form_validation->set_rules("student_name","Student Name","trim|required");
			$this->form_validation->set_rules("student_email","Student Email","trim|required");
		    $this->form_validation->set_rules("student_mobile","Student Mobile","trim|required|min_length[10]|max_length[10]");
			$this->form_validation->set_rules("gender","Gender","trim|required");
			$this->form_validation->set_rules("course_name","Course Name","trim|required");
			$this->form_validation->set_rules("sname","specialization","trim|required");

			$config['upload_path']="./uploads/";
			$config['allowed_types']="jpg|png";
			$this->load->library("upload",$config);
			if($this->upload->do_upload("student_photo")){
				$photoDetails=$this->upload->data();
			}
			else{
				$photoerror=$this->upload->display_errors();
			}
			if($this->form_validation->run() && !empty($photoDetails) && empty($photoerror)) {

			$insarray=array("name" => $_POST['student_name'],"email"=>$_POST['student_email'],"mobile"=>$_POST['student_mobile'],"gender" => $_POST['gender'],"course" => $_POST['course_name'],"specialization" => $_POST['sname'],"photo"=>$photoDetails['file_name']);
			
			$res=$this->RegisterModel->insertDetails($insarray);
			
			$sports=$_POST['sportsname'];	
			if($sports){
				foreach($sports as $sport){
					$sportsinsarray=array("student_id"=>$res,"sports_id"=>$sport);
					$this->sportsmodel->insertStudentSports($sportsinsarray);

				}
			}
			if($res)
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
		else{
			$message=array('status' => 2,"message" =>$photoerror);
				$this->session->set_flashdata('alerts',$message);
		}
		}
	$data['courses']=$this->CourseModel->getDetails();
	$data['slists']=$this->smodel->getSpecilizationList();
	$data['sports']=$this->sportsmodel->getdetails();

	$this->load->view('header');
	$this->load->view('welcome_message',$data);
	$this->load->view('commonscripts');
	$this->load->view('registrationscripts');
	$this->load->view('footer');


}

	

	
}
?>