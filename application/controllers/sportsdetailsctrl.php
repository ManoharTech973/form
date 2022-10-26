<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sportsdetailsctrl extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sportsmodel');
	}

public function index(){

	$data['sportsdetails']=$this->sportsmodel->getdetails();
	$this->load->view('header');
	$this->load->view('sportsdetails',$data);
	$this->load->view('commonscripts');
	$this->load->view('footer');





}



}
?>
