<?php 

/**
* 
*/
class Data extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Data','d');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('TypeUser')!='admin' && $this->session->userdata('TypeUser')!='operator'){
			// redirect('forbidden');
				redirect('login');

			}
			redirect('login');
		}
		if($this->session->userdata('TypeUser')!='admin'){
			// redirect('home');
			// redirect('forbidden');
		}
	}

	function index(){

	}

//dokter
	function dokter(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_dokter',$data);
	}
	function insertd(){
		$this->d->insertd();
	}
	function updated(){
		$this->d->updatedokter();
	}
	function hapusd($kode){
		$this->d->deleted($kode);
	}
	function datadokter(){
		$this->d->getdatadokter();
	}
//end of dokter

//pasien
	function pasien(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_pasien',$data);
	}
	function insertp(){
		$this->d->insertp();
	}
	function updatep($kode){
		$this->d->updatep($kode);
	}
	function hapusp($kode){
		$this->d->deletep($kode);
	}
	function datapasien(){
		$this->d->getdatapasien();
	}
//end of pasien

	

//obat
	function obat(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_obat',$data);
	}
	function inserto(){
		$this->d->inserto();
	}
	function updateo($kode){
		$this->d->updateo($kode);
	}
	function hapuso($kode){
		$this->d->deleteo($kode);
	}
	function dataobat(){
		$this->d->getdataobat();
	}
//end of obat

//pegawai
	function pegawai(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_pegawai',$data);
	}
	function insertpg(){
		$this->d->insertpg();
	}
	function updatepg($kode){
		$this->d->updatepg($kode);
	}
	function hapuspg($kode){
		$this->d->deletepg($kode);
	}
	function datapegawai(){
		$this->d->getdatapegawai();
	}
//end of pegawai

//poli
	function poli(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_poli',$data);
	}
	function insertpl(){
		$this->d->insertpl();
	}
	function updatepl($kode){
		$this->d->updatepl($kode);
	}
	function hapuspl($kode){
		$this->d->deletepl($kode);
	}
	function datapoli(){
		$this->d->getdatapoli();
	}
//end of poli


//jenis biaya
	function jenisbiaya(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_jenis',$data);
	}
	function insertj(){
		$this->d->insertj();
	}
	function updatej($kode){
		$this->d->updatej($kode);
	}
	function hapusj($kode){
		$this->d->deletej($kode);
	}
	function datajenis(){
		$this->d->getdatajenis();
	}
//end of jenis biaya


//Jadwal Praktek
	function jadwal(){
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('master/view_jadwal2',$data);
	}
	function insertjp(){
		$this->d->insertjp();
	}
	function updatejp($kode){
		$this->d->updatejp($kode);
	}
	function hapusjp($kode){
		$this->d->deletejp($kode);
	}
	function datajadwal(){
		$this->d->getdatajadwal();
	}
	function getdatadokter1(){
		$this->d->getdatadokter1();
	}
	function getdatadokter2(){
		$this->d->getdatadokter2();
	}
//end of Jadwal Praktek


	//end of file
}
?>