<?php 

/**
* 
*/
class M_Laporan extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}


// Pasien diperiksa
	function getdata1($tgl1,$tgl2){
		$tglz1=date('Ymd',strtotime($tgl1));
		$tglz2=date('Ymd',strtotime($tgl2));
		$kondisi=$tglz1.' AND '.$tglz2;	
		$query=$this->db->query("SELECT * FROM v_pasien_diperiksa WHERE TglPendaftaran BETWEEN ".$kondisi);
		// echo json_encode($query->result_array());
		// echo $tglz1;
		$i=1;
		// $query=$this->db->query("SELECT * FROM v_pasien_diperiksa"); 
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoPendaftaran']."</td>";
			echo "<td>".$data['TglPendaftaran']."</td>";
			echo "<td>".$data['NoUrut']."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['AlmPas']."</td>";
			$i++;
		}

	}
// End of pasien diperiksa

	// Pasien belum diperiksa
	function getdata2($tgl1,$tgl2){
		$tglx1=date('Ymd',strtotime($tgl1));
		$tglx2=date('Ymd',strtotime($tgl2));
		$kondisi=$tglx1.' AND '.$tglx2;	
		$query=$this->db->query("SELECT * FROM v_pasien_blm_diperiksa WHERE TglPendaftaran BETWEEN ".$kondisi);
		// echo json_encode($query->result_array());
		// echo $tglz1;
		$i=1;
		// $query=$this->db->query("SELECT * FROM v_pasien_diperiksa"); 
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoPendaftaran']."</td>";
			echo "<td>".$data['TglPendaftaran']."</td>";
			echo "<td>".$data['NoUrut']."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['AlmPas']."</td>";
			$i++;
		}

	}
// End of pasien belum diperiksa

	// Pemeriksaan
	function getdata3($tgl1,$tgl2){
		$tglx1=date('Ymd',strtotime($tgl1));
		$tglx2=date('Ymd',strtotime($tgl2));
		$kondisi=$tglx1.' AND '.$tglx2;	
		$query=$this->db->query("SELECT * FROM v_pemasukan_pemeriksaan WHERE TglPendaftaran BETWEEN ".$kondisi);
		// echo json_encode($query->result_array());
		// echo $tglz1;
		$i=1;
		// $query=$this->db->query("SELECT * FROM v_pasien_diperiksa"); 
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoPendaftaran']."</td>";
			echo "<td>".$data['TglPendaftaran']."</td>";
			echo "<td>".$data['NoUrut']."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['Tarif']."</td>";
			$i++;
		}

	}

	function getdata4($tgl1,$tgl2){
		$tglx1=date('Ymd',strtotime($tgl1));
		$tglx2=date('Ymd',strtotime($tgl2));
		$kondisi=$tglx1.' AND '.$tglx2;	
		$query=$this->db->query("SELECT SUM(Tarif) as Tarif FROM v_pemasukan_pemeriksaan WHERE TglPendaftaran BETWEEN ".$kondisi);
		$data=$query->row_array();
		echo '<tr>
		<th>Total</th>
		<th colspan="5">';

		if($query->num_rows()==0){
			echo "<th>0</th>";
		}else{
			echo "<th>".$data['Tarif']."</th>";	
		}
		echo '</th>
		</tr>';
		
	}


// End of Pemeriksaan

// Obat
	function getdata5($tgl1,$tgl2){
		$tglx1=date('Ymd',strtotime($tgl1));
		$tglx2=date('Ymd',strtotime($tgl2));
		$kondisi=$tglx1.' AND '.$tglx2;	

		$i=1;
		$query=$this->db->query("SELECT * FROM v_pemasukan_obat WHERE SUBSTRING( NoResep, 1, 8 ) BETWEEN ".$kondisi);
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoResep']."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['NmObat']."</td>";
			echo "<td>".$data['Jumlah']."</td>";
			echo "<td>".$data['HargaJual']."</td>";
			echo "<td>".$data['Total']."</td>";
			echo "</tr>";
			$i++;
		}

	}
	function getdata6($tgl1,$tgl2){
		$tglx1=date('Ymd',strtotime($tgl1));
		$tglx2=date('Ymd',strtotime($tgl2));
		$kondisi=$tglx1.' AND '.$tglx2;	
		$query=$this->db->query("SELECT SUM(Total) as Subtotal FROM v_pemasukan_obat WHERE SUBSTRING( NoResep, 1, 8 ) BETWEEN ".$kondisi);
		$data=$query->row_array();
		echo '<tr>
		<th>Total</th>
		<th colspan="6">';

		if($query->num_rows()==0){
			echo "<th>0</th>";
		}else{
			echo "<th>".$data['Subtotal']."</th>";
		}
		echo '</th>
		</tr>';

	}

	// End of Obat



	// End of file
}

?>