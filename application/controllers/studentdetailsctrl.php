<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentdetailsctrl extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('RegisterModel');
		$this->load->model('CourseModel');
		$this->load->model('smodel');
		$this->load->model('sportsmodel');
	}

public function index(){

  $data['studentdetails']=$this->RegisterModel->getstudentdetails();
	$data['coursedetails']=$this->CourseModel->getcoursedetails();
	$data['specializationdetails']=$this->smodel->getSpecilizationList();
	$data['sportsdetails']=$this->sportsmodel->getdetails();

	$this->load->view('header');
	$this->load->view('studentdetails',$data);
	$this->load->view('commonscripts');
	$this->load->view('footer');





}

public function editstudentdetails($studentId){
	$data['studentdetails']=$this->RegisterModel->getstudentdetailsbystudentid($studentId);
	$data['courses']=$this->CourseModel->getDetails();
	$data['slists']=$this->smodel->getSpecilizationList();
	$data['sports']=$this->sportsmodel->getdetails();
	$this->load->view('header');
	$this->load->view('editstudentdetails',$data);
	$this->load->view('commonscripts');
	$this->load->view('footer');

}



}
?>
