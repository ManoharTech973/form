<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class specializationdetailsctrl extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CourseModel');
		$this->load->model('smodel');

	}

public function index(){
	$data['coursedetails']=$this->CourseModel->getcoursedetails();
	$data['specializationdetails']=$this->smodel->getSpecilizationList();
	$this->load->view('header');
	$this->load->view('specializationdetails',$data);
	$this->load->view('commonscripts');
	$this->load->view('footer');

}



}
?>
