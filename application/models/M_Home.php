<?php 

/**
* 
*/
class M_Home extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login','l');
	}

	function getpasien1(){
		
		for ($i=1; $i <= 12; $i++) { 
			if($i<10){
				$i="0".$i;
			}
			$tgl=date('Y-'.$i);

			$query=$this->db->query("SELECT count(TglPendaftaran) as no FROM v_pasien_diperiksa WHERE TglPendaftaran like '".$tgl."%'");
			echo json_encode($query->row_array());
		}
	}
}


?>