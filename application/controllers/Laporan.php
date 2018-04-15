<?php 

/**
* 
*/
class Laporan extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Laporan','l');
	}

	function jadwal(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('laporan/view_jadwal2',$data);
	}

	function periksa(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('laporan/view_periksa1',$data);
	}

	function pemeriksaan(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('laporan/view_periksa2',$data);
	}

	function obat(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('laporan/view_obat2',$data);
	}

	function getdata1($tgl1,$tgl2){
		$this->l->getdata1($tgl1,$tgl2);
	}
	function getdata2($tgl1,$tgl2){
		$this->l->getdata2($tgl1,$tgl2);
	}
	function getdata3($tgl1,$tgl2){
		$this->l->getdata3($tgl1,$tgl2);
	}
	function getdata4($tgl1,$tgl2){
		$this->l->getdata4($tgl1,$tgl2);
	}
	function getdata5($tgl1,$tgl2){
		$this->l->getdata5($tgl1,$tgl2);
	}
	function getdata6($tgl1,$tgl2){
		$this->l->getdata6($tgl1,$tgl2);
	}

	

}

?>