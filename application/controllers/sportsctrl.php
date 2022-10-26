<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sportsctrl extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('sportsmodel');
  }

    public function index(){

        if($_POST){
            $this->form_validation->set_rules("sports-name","Sports Name","trim|required");

            if($this->form_validation->run()){
                $insarray=array("sports_name"=>$_POST['sports-name']);
                $this->load->model('sportsmodel');
                $res=$this->sportsmodel->insertDetails($insarray);

            if($res==1){
                $message=array('status'=>1,"message"=>"Added Sucessfully");
                $this->session->set_flashdata('alerts',$message);
                $this->form_validation->reset_validation();
                $_POST=[];
            }
            else{
                $message=array('status'=>2,"message"=>"Something went wrong");
                $this-session->set_flashdata('alerts',$message);
            }

        }

        }


        $this->load->view('header');
        $this->load->view('sportsview');
        $this->load->view('commonscripts');
        $this->load->view('sportsscript');
        $this->load->view('footer');
    }


    public function editsports($sportsid){

     if($_POST){
    	 $sports_id=$_POST['sports_id'];
    	 $sports_name=$_POST['sports_name'];

    	 $res=$this->sportsmodel->updatesportsdetails($sports_id,$sports_name);
    	 if($res==1)
     	{
     	$message=array('status' => 1,"message" => "Updated Sucessfully");
     	$this->session->set_flashdata('alerts',$message);
     	$this->form_validation->reset_validation();
     	$_POST=[];
    	redirect(base_url()."index.php/studentdetailsctrl/index");
     	}
     	else
     	{
     		$message=array('status' => 2,"message" => "Something went wrong");
     		$this->session->set_flashdata('alerts',$message);
     	}

     }

    $data['sportsdetails']=$this->sportsmodel->getsportsdetailsbysports($sportsid);

    	$this->load->view('header');
    	$this->load->view('editsports',$data);
    	$this->load->view('sportsscript');
    	$this->load->view('commonscripts');
    	$this->load->view('footer');
    }
}

?>
