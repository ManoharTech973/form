<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coursedetailsctrl extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CourseModel');
	}

public function index(){

	$data['coursedetails']=$this->CourseModel->getcoursedetails();
	$this->load->view('header');
	$this->load->view('coursedetails',$data);
	$this->load->view('commonscripts');
	$this->load->view('footer');





}



}
?>
