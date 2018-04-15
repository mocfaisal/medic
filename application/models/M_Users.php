<?php 

/**
* 
*/
class M_Users extends CI_Model
{
	
	function __construct(){

		parent::__construct();

	}


	function getuser($id){
		$query=$this->db->query("SELECT p.NIP, p.NamaPeg, l.TypeUser, p.AlmPeg, p.TelpPeg, p.TglLhrPeg, p.JnsKelPeg FROM login AS l INNER JOIN pegawai AS p ON l.Username = p.NIP WHERE NIP='".$id."'"); 
		$hasil=$query->result_array();
		echo json_encode($hasil);

	}

	function updateuser($kode){
		$tgllahir = date('Y-m-d',strtotime($this->input->post('TglLhrPeg')));
		$data = array(
			'NamaPeg'=>$this->input->post('NamaPeg'),
			'AlmPeg'=>$this->input->post('AlmPeg'),
			'TelpPeg'=>$this->input->post('TelpPeg'),		
			'TglLhrPeg'=>$tgllahir,				
			'JnsKelPeg'=>$this->input->post('jk')	
		);
		$this->db->where('NIP',$kode);
		if($this->db->update('pegawai',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	// End of file
}

?>