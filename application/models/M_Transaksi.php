<?php 

/**
* 
*/
class M_Transaksi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

// Pendaftaran
	function refreshno(){
		$tgl=date('Ymd');
		$query=$this->db->query("SELECT IFNULL(MAX(NoUrut ),0) + 1 AS no_urut FROM pendaftaran WHERE SUBSTRING( NoPendaftaran, 1, 8 ) = ".$tgl);
		$no_urut=$query->row('no_urut');
		$hasil=sprintf('%03s',$no_urut);
		echo $hasil;
		return $hasil;
		
	}

	function refreshnod(){
		$tgl=date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( NoPendaftaran, 9, 3 ) ), 0 ) + 1 AS no_urut FROM pendaftaran WHERE SUBSTRING( NoPendaftaran, 1, 8 ) = ".$tgl); 
		$no_urut=$query->row('no_urut');
		$hasil=$tgl.sprintf('%03s',$no_urut);
		echo $hasil;
		return $hasil;
	}
	function datadaftar(){
		$i=1;
		$query=$this->db->query("SELECT pd.NoPendaftaran, pd.TglPendaftaran, pd.NoUrut, pd.NIP, p.NoPasien, p.NamaPas, jp.KodeJadwal, jp.Hari, jp.JamMulai, jp.JamSelesai FROM pendaftaran AS pd INNER JOIN pasien AS p ON pd.NoPasien = p.NoPasien INNER JOIN jadwalpraktek AS jp ON pd.KodeJadwal = jp.KodeJadwal"); 
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoPendaftaran']."</td>";
			echo "<td>".$data['TglPendaftaran']."</td>";
			echo "<td>".$data['NoUrut']."</td>";
			echo "<td>".$data['NIP']."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['KodeJadwal']."</td>";
			echo "<td>".$data['Hari'].", ".$data['JamMulai']." <b>s/d</b> ".$data['JamSelesai']."</td>";
			// echo "<td>
			// <span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			// <span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			// </td>";
			echo "</tr>";
			$i++;
		}
	}
	function saved(){
		$tgl=date('Y-m-d');
		$data=array(
			'NoPendaftaran'=>$this->refreshnod(),
			'TglPendaftaran'=>$tgl,
			'NoUrut'=>$this->refreshno(),
			'NIP'=>$this->session->userdata('NIP'),
			'KodeJadwal'=>$this->input->post('KodeJadwal'),
			'NoPasien'=>$this->input->post('KodePasien')
		);

		if($this->db->insert('pendaftaran',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function getdatadaftar($kode){
		$query=$this->db->query("SELECT pd.NoPendaftaran, pd.NoUrut, ps.NoPasien, ps.NamaPas, jp.KodeJadwal, jp.Hari, jp.JamMulai, jp.JamSelesai, d.NmDokter FROM pendaftaran AS pd INNER JOIN jadwalpraktek AS jp ON pd.KodeJadwal = jp.KodeJadwal INNER JOIN pasien AS ps ON pd.NoPasien = ps.NoPasien INNER JOIN dokter AS d ON jp.KodeJadwal = d.KodeJadwal where NoPendaftaran='".$kode."'"); 
		echo json_encode($query->result_array());
	}

// End Of Pendaftaran

// Pemeriksaan

	function dataperiksa(){
		$i=1;
		$query=$this->db->query("SELECT pd.NoPendaftaran, pd.TglPendaftaran, pd.NoUrut, p.NoPasien, p.NamaPas, jp.KodeJadwal, jp.Hari, jp.JamMulai, jp.JamSelesai, d.NmDokter FROM pendaftaran AS pd INNER JOIN pasien AS p ON pd.NoPasien = p.NoPasien INNER JOIN jadwalpraktek AS jp ON pd.KodeJadwal = jp.KodeJadwal INNER JOIN dokter d ON jp.KodeJadwal = d.KodeJadwal"); 
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoPendaftaran']."</td>";
			echo "<td>".$data['TglPendaftaran']."</td>";
			echo "<td>".$data['NoUrut']."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['KodeJadwal']."</td>";
			echo "<td>".$data['NmDokter']."</td>";
			echo "<td>".$data['Hari'].", ".$data['JamMulai']." <b>s/d</b> ".$data['JamSelesai']."</td>";
		}

	}
	function noperiksa(){
		$tgl=date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( NoPemeriksaan, 9, 3 ) ), 0 ) + 1 AS no_urut FROM pemeriksaan WHERE SUBSTRING( NoPemeriksaan, 1, 8 ) = ".$tgl); 
		$no_urut=$query->row('no_urut');
		$hasil=$tgl.sprintf('%03s',$no_urut);
		// echo $hasil;
		return $hasil;
	}

	function kodedetjb($kode,$key){
		$kodeid=$kode;
		$lastNoUrut=substr($kodeid,5,3);
		$nextNoUrut=$lastNoUrut+$key+1;
		$nextNoUrutPen=$kodeid.sprintf('%03s',$nextNoUrut);
		return $nextNoUrutPen;
	}

	function insertp(){
		$data=array(
			'NoPemeriksaan'=>$this->noperiksa(),
			'Keluhan'=>$this->input->post('KeluhanPas'),
			'Diagnosa'=>$this->input->post('Diagnosa'),
			'Perawatan'=>$this->input->post('Perawatan'),
			'Tindakan'=>$this->input->post('Tindakan'),
			'BeratBadan'=>$this->input->post('BeratBadan'),
			'TensiDiastolik'=>$this->input->post('TensiD'),
			'TensiSistotik'=>$this->input->post('TensiS'),
			'NoPendaftaran'=>$this->input->post('nodaftar')
		);

		$data2=array(
			'NoPemeriksaan'=>$this->noperiksa(),
			'NoResep'=>$this->getnoresep()
		);

		$data3 = array(
			'NoPemeriksaan'=>$this->noperiksa()
		);
		foreach ($this->input->post('kode') as $key => $value){	
			$data4=array(
				'DetJenisBiaya'=>$this->kodedetjb($value,$key),
				'IDJenisBiaya'=>$value,
				'NoPendaftaran'=>$this->input->post('nodaftar'),
				'NamaBiaya'=>$this->input->post('nama')[$key],
				'Tarif'=>$this->input->post('tarif')[$key]
			);
			$this->db->insert('det_biaya',$data4);
		}

		if($this->db->insert('pemeriksaan',$data)){
			$this->db->insert('resep',$data2);
			// $this->db->where('NoPendaftaran',$this->input->post('nodaftar'));
			// $this->db->update('pendaftaran',$data3);
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

// End Of Pemeriksaan

//Resep
	function getdataresep(){
		$i=1;
		$query=$this->db->query("SELECT * FROM resep");

		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoResep']."</td>";
			echo "<td>".$data['Dosis']."</td>";
			echo "<td>".$data['Jumlah']."</td>";
			echo "<td>".$data['KodeObat']."</td>";
			echo "<td>".$data['NoPemeriksa']."</td>";
			echo "<td>
			<span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnoresep(){
		$tgl=date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( NoResep, 9, 3 ) ), 0 ) + 1 AS no_urut FROM resep WHERE SUBSTRING( NoResep, 1, 8 ) = ".$tgl); 
		$no_urut=$query->row('no_urut');
		$hasil=$tgl.sprintf('%03s',$no_urut);
		return $hasil;
	}
	function insertr(){
		$tgl=date('Y-m-d');
		$data = array(
			'NoResep'=>$this->getnoreser(),
			'Dosis'=>$this->input->post('Dosis'),
			'Jumlah'=>$this->input->post('Jumlah'),
		);
		if($this->db->insert('resep',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function kodedetresep($kode,$key){
		$kodeid=$kode;
		$lastNoUrut=substr($kodeid,11,3);
		$nextNoUrut=$lastNoUrut+$key+1;
		$nextNoUrutPen=$kodeid.sprintf('%03s',$nextNoUrut);
		return $nextNoUrutPen;
	}

	function updater($kode){
		$data = array(
			'Dosis'=>$this->input->post('Dosis'),
			'Jumlah'=>$this->input->post('Jumlah')
		);

		foreach($this->input->post('kode') as $key => $value){

			$data2 = array(
				'DetNoResep'=>$this->kodedetresep($kode,$key),
				'KodeObat'=>$this->input->post('kode')[$key],
				'NoResep'=>$this->input->post('NoResep'),
				'Jumlah'=>$this->input->post('jml')[$key],
				'Dosis'=>$this->input->post('dosis')[$key]
			);
			$this->db->insert('det_resep',$data2);

		}

		$this->db->where('NoResep',$kode);
		if($this->db->update('resep',$data)){
			// return $value=$this->kodedetresep($kode,$key);
			echo "Berhasil";
		}
		else{
			return $value='';
			echo "Gagal";
		}

	}

	function deleter($kode){
		$this->db->where('NoResep',$kode);
		if($this->db->delete('resep')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Resep

// Data Pasien

	function getdatap(){
		$i=1;
		$query=$this->db->query("SELECT * FROM pasien");

		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoPasien']."</td>";
			echo "<td>".$data['NamaPas']."</td>";
			echo "<td>".$data['AlmPas']."</td>";
			echo "<td>".$data['TelpPas']."</td>";
			echo "<td>".$data['TglLahirPas']."</td>";
			echo "<td>".$data['JenisKelPas']."</td>";
			echo "<td>".$data['TglRegistrasi']."</td>";
			echo "<td>
			<span class='pilih'><btn class='btn btn-primary' title='Pilih' data-dismiss='modal'>
			<i class='fa fa-paper-plane'></i>
			</btn></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}

// End of Data Pasien

// End of file
}

?>