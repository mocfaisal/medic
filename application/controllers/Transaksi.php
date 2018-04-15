<?php 

/**
* 
*/
class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Transaksi','t');
	}

//Pendaftaran
	function daftar(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('transaksi/view_daftar',$data);
	}

	function refreshno(){
		$this->t->refreshno();
	}

	function refreshnod(){
		$this->t->refreshnod();
	}

	function saved(){
		$this->t->saved();
	}

	function datadaftar(){
		$this->t->datadaftar();
	}
	function getdatadaftar($kode){
		$this->t->getdatadaftar($kode);
	}
// End Of Pendaftaran


	// Pemeriksaan
	function periksa(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('transaksi/view_periksa',$data);
	}

	function insertp(){
		$this->t->insertp();
	}
// End Of Pemeriksaan

//resep
	function resep(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('transaksi/view_resep',$data);
	}
	function insertr(){
		$this->t->insertr();
	}
	function updater($kode){
		$this->t->updater($kode);
	}
	function hapusr($kode){
		$this->t->deleter($kode);
	}
	function dataresep(){
		$this->t->getdataresep();
	}
//end of resep

// Data Pasien

	function getdatap(){
		$this->t->getdatap();
	}

// End of data pasien

//end of file
}

?>