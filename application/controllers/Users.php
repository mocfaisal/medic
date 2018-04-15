<?php 

/**
* 
*/
class Users extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Users','u');
	}


	function index(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('users/view_users',$data);
	}

	function update(){
		$this->u->update();
	}

	function getuser($id){
		$this->u->getuser($id);
	}

	function updateuser($id){
		$this->u->updateuser($id);
	}


// End of file
}

?>