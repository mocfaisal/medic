<?php 
/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login','l');
		$this->load->model('M_Home','h');

		if(!$this->session->userdata('login')){
			if($this->session->userdata('TypeUser')!='admin' && $this->session->userdata('TypeUser')!='operator'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	function index(){

// echo "Hola";
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('view_home',$data);
		// $this->load->view('view_home4');
	}
	function logout(){
		session_destroy();
		redirect('login');
	}

	function getpasien1(){
		$this->h->getpasien1();
	}


	//end of file
}

?>	