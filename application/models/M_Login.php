<?php 
/**
* 
*/
class M_Login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function cek(){
		$query=$this->db->query("SELECT p.NIP, p.NamaPeg, l.TypeUser FROM login l INNER JOIN pegawai p on l.Username = p.nip Where l.Username='".$this->input->post('username')."' and l.Password='".$this->input->post('password')."'");

		$hasil=$query->num_rows();

		if($hasil == 1){

			$row=$query->row_array();
			$data=array(
				// 'user'=>$hasil['Username'],
				'nama'=>$row['NamaPeg'],
				'NIP'=>$row['NIP'],
				'tipe'=>$row['TypeUser'],
				'login'=>true
			);
			$this->session->set_userdata($data);
			return true;
		}
		else{
			return false;
		}
	}


}

?>