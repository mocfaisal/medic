<?php 

/**
* 
*/
class M_Data extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

//Dokter
	function getdatadokter(){
		$i=1;
		$query=$this->db->query("SELECT d.KodeDokter, d.NmDokter, d.AlmDokter, d.TelpDokter, p.NamaPoli,p.KodePoli FROM dokter AS d inner JOIN poliklinik AS p on d.KodePoli=p.KodePoli");
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['KodeDokter']."</td>";
			echo "<td>".$data['NmDokter']."</td>";
			echo "<td>".$data['AlmDokter']."</td>";
			echo "<td>".$data['TelpDokter']."</td>";
			echo "<td>".$data['NamaPoli']."</td>";
			echo "<td hidden>".$data['KodePoli']."</td>";
			echo "<td>
			<a href='#edit' class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></a>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnodokter(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(KodeDokter,2,4)),0)+1 as no_urut FROM dokter");
		$no_urut=$query->row('no_urut');
		$hasil="P".sprintf('%04s',$no_urut);
		return $hasil;
	}
	// function getnopoli(){
	// 	$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(KodePoli,3,3)),0)+1 as no_urut FROM dokter");
	// 	$no_urut=$query->row('no_urut');
	// 	$hasil="PL".sprintf('%03s',$no_urut);
	// 	return $hasil;
	// }
	function insertd(){
		$tgl=date('Y-m-d');
		$data = array(
			'KodeDokter'=>$this->getnodokter(),
			'NmDokter'=>$this->input->post('NmDokter'),
			'AlmDokter'=>$this->input->post('AlmDokter'),
			'TelpDokter'=>$this->input->post('TelpDokter'),
			'KodePoli'=>$this->getnopoli()

		);
		$data2=array(
			'KodePoli'=>$this->getnopoli(),
			'NamaPoli'=>$this->input->post('NamaPoli')
		);

		if($this->db->insert('dokter',$data)){
			$this->db->insert('Poliklinik',$data2);
			echo "Berhasil";
			return true;
		}
		else{
			echo "Gagal";
			return false;
		}
	}
	function updatedokter(){
		$data = array(
			'NmDokter'=>$this->input->post('NmDokter'),
			'AlmDokter'=>$this->input->post('AlmDokter'),
			'TelpDokter'=>$this->input->post('TelpDokter')
		);
		$data2=array(
			'NamaPoli'=>$this->input->post('NamaPoli')
		);
		$this->db->where('KodeDokter',$this->input->post('kode'));
		if($this->db->update('dokter',$data)){

			$this->db->where('KodePoli',$this->input->post('KodePoli'));
			$this->db->update('poliklinik',$data2);

			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	function deleted($kode){
		$query=$this->db->query("DELETE FROM dokter WHERE KodeDokter = '".$kode."'");
		// $this->db->where('KodeDokter',$kode);
		if($query){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Dokter


//Pasien
	function getdatapasien(){
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
			<span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnopasien(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(NoPasien,2,4)),0)+1 as no_urut FROM pasien");
		$no_urut=$query->row('no_urut');
		$hasil="P".sprintf('%04s',$no_urut);
		return $hasil;
	}
	function insertp(){
		$tgl=date('Y-m-d');
		$tgllahir = date('Y-m-d',strtotime($this->input->post('tgllahir')));
		$data = array(
			'NoPasien'=>$this->getnopasien(),
			'NamaPas'=>$this->input->post('NamaPas'),
			'AlmPas'=>$this->input->post('AlmPas'),
			'TelpPas'=>$this->input->post('TelpPas'),
			'TglLahirPas'=>$tgllahir,
			'JenisKelPas'=>$this->input->post('jk'),
			'TglRegistrasi'=>$tgl
		);
		if($this->db->insert('pasien',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function updatep($kode){
		$tgllahir = date('Y-m-d',strtotime($this->input->post('tgllahir')));
		$data = array(
			'NamaPas'=>$this->input->post('NamaPas'),
			'AlmPas'=>$this->input->post('AlmPas'),
			'TelpPas'=>$this->input->post('TelpPas'),
			'TglLahirPas'=>$tgllahir,
			'JenisKelPas'=>$this->input->post('jk'),
		);
		$this->db->where('NoPasien',$kode);
		if($this->db->update('pasien',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	function deletep($kode){
		$this->db->where('NoPasien',$kode);
		if($this->db->delete('pasien')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Pasien

//Obat
	function getdataobat(){
		$i=1;
		$query=$this->db->query("SELECT * FROM obat");

		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['KodeObat']."</td>";
			echo "<td>".$data['NmObat']."</td>";
			echo "<td>".$data['Merk']."</td>";
			echo "<td>".$data['Satuan']."</td>";
			echo "<td>".$data['HargaJual']."</td>";

			echo "<td>
			<span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnoobat(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(KodeObat,2,4)),0)+1 as no_urut FROM obat");
		$no_urut=$query->row('no_urut');
		$hasil="B".sprintf('%04s',$no_urut);
		return $hasil;
	}

	function inserto(){
		$tgl=date('Y-m-d');
		$cari = array(",",".00");
		$harga=str_replace($cari, "", $this->input->post('Harga'));
		$data = array(
			'KodeObat'=>$this->getnoobat(),
			'NmObat'=>$this->input->post('NmObat'),
			'Merk'=>$this->input->post('merk'),
			'Satuan'=>$this->input->post('Satuan'),		
			'HargaJual'=>$harga
		);
		if($this->db->insert('obat',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function updateo($kode){
		$cari = array(",",".00");
		$harga=str_replace($cari, '', $this->input->post('Harga'));
		$data = array(
			'NmObat'=>$this->input->post('NmObat'),
			'Merk'=>$this->input->post('merk'),
			'Satuan'=>$this->input->post('Satuan'),		
			'HargaJual'=>$harga
		);
		$this->db->where('KodeObat',$kode);
		if($this->db->update('obat',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	function deleteo($kode){
		$this->db->where('KodeObat',$kode);
		if($this->db->delete('obat')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Obat


//Pegawai
	function getdatapegawai(){
		$i=1;
		$query=$this->db->query("SELECT * FROM pegawai");

		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NIP']."</td>";
			echo "<td>".$data['NamaPeg']."</td>";
			echo "<td>".$data['AlmPeg']."</td>";
			echo "<td>".$data['TelpPeg']."</td>";
			echo "<td>".$data['TglLhrPeg']."</td>";
			echo "<td>".$data['JnsKelPeg']."</td>";
				// echo "<td>".$data['Username']."</td>";

			echo "<td>
			<span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnopegawai(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(NIP,2,4)),0)+1 as no_urut FROM pegawai");
		$no_urut=$query->row('no_urut');
		$hasil="K".sprintf('%04s',$no_urut);
		return $hasil;
	}

	function insertpg(){
		$tgl=date('Y-m-d');
		$tgllahir = date('Y-m-d',strtotime($this->input->post('TglLhrPeg')));
		$pass = date('Ymd',strtotime($this->input->post('TglLhrPeg')));
		$data = array(
			'NIP'=>$this->getnopegawai(),
			'NamaPeg'=>$this->input->post('NamaPeg'),
			'AlmPeg'=>$this->input->post('AlmPeg'),
			'TelpPeg'=>$this->input->post('TelpPeg'),		
			'TglLhrPeg'=>$tgllahir,		
			'JnsKelPeg'=>$this->input->post('jk'),
			'Username'=>$this->getnopegawai()
		);

		if($this->session->userdata('tipe')!='admin' && $type=$this->input->post('tipe')=='admin'){
			return false;
		}
		else{
			$type=$this->input->post('tipe');
		}
		$data2=array(
			'Username'=>$this->getnopegawai(),
			'Password'=>$pass,
			'TypeUser'=>$type
		);
		if($this->db->insert('pegawai',$data) && $this->db->insert('login',$data2)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function updatepg($kode){
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

	function deletepg($kode){
		$this->db->where('NIP',$kode);
		if($this->db->delete('pegawai')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Pegawai

//Poliklinik
	function getdatapoli(){
		$i=1;
		$query=$this->db->query("SELECT * FROM poliklinik");

		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['KodePoli']."</td>";
			echo "<td>".$data['NamaPoli']."</td>";			
			echo "<td>
			<span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnopoli(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(KodePoli,3,3)),0)+1 as no_urut FROM poliklinik");
		$no_urut=$query->row('no_urut');
		$hasil="PL".sprintf('%03s',$no_urut);
		return $hasil;
	}

	function insertpl(){
		$tgl=date('Y-m-d');
		$data = array(
			'KodePoli'=>$this->getnopoli(),
			'NamaPoli'=>$this->input->post('nama')	
		);
		if($this->db->insert('poliklinik',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function updatepl($kode){
		$data = array(
			'NamaPoli'=>$this->input->post('nama')	
		);
		$this->db->where('KodePoli',$kode);
		if($this->db->update('poliklinik',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	function deletepl($kode){
		$this->db->where('KodePoli',$kode);
		if($this->db->delete('poliklinik')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Poliklinik


//Jenis Biaya
	function getdatajenis(){
		$i=1;
		$query=$this->db->query("SELECT * FROM jenisbiaya");
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['IDJenisBiaya']."</td>";
			echo "<td>".$data['NamaBiaya']."</td>";
			echo "<td>".$data['Tarif']."</td>";
			echo "<td>
			<a href='#edit' class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></a>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnojenis(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(IDJenisBiaya,3,3)),0)+1 as no_urut FROM jenisbiaya");
		$no_urut=$query->row('no_urut');
		$hasil="JB".sprintf('%03s',$no_urut);
		return $hasil;
	}

	function insertj(){
		$tgl=date('Y-m-d');
		$data = array(
			'IDJenisBiaya'=>$this->getnojenis(),
			'NamaBiaya'=>$this->input->post('NamaBiaya'),
			'Tarif'=>$this->input->post('Tarif')
		);
		if($this->db->insert('jenisbiaya',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function updatej($kode){
		$data = array(
			'NamaBiaya'=>$this->input->post('NamaBiaya'),
			'Tarif'=>$this->input->post('Tarif')
		);
		$this->db->where('IDJenisBiaya',$kode);
		if($this->db->update('jenisbiaya',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	function deletej($kode){
		$this->db->where('IDJenisBiaya',$kode);
		if($this->db->delete('jenisbiaya')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
//End Of Jenis Biaya


//Jadwal Praktek
	function getdatajadwal(){
		$i=1;
		$query=$this->db->query("SELECT j.KodeJadwal, j.Hari, j.JamMulai, j.JamSelesai, d.NmDokter, d.KodeDokter FROM jadwalpraktek AS j INNER JOIN dokter AS d ON j.KodeJadwal = d.KodeJadwal");
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['KodeJadwal']."</td>";
			echo "<td>".$data['Hari']."</td>";
			echo "<td>".$data['JamMulai']."</td>";
			echo "<td>".$data['JamSelesai']."</td>";
			echo "<td>".$data['NmDokter']."</td>";
			echo "<td hidden>".$data['KodeDokter']."</td>";
			echo "<td>
			<span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			<span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}
	function getnojadwal(){
		$query=$this->db->query("SELECT IFNULL(MAX(SUBSTRING(KodeJadwal,2,4)),0)+1 as no_urut FROM jadwalpraktek");
		$no_urut=$query->row('no_urut');
		$hasil="J".sprintf('%04s',$no_urut);
		return $hasil;
	}

	function insertjp(){
		$tgl=date('Y-m-d');
		$mulai=date('H:i:s',strtotime($this->input->post('JamMulai')));
		$selesai=date('H:i:s',strtotime($this->input->post('JamSelesai')));
		$data = array(
			'KodeJadwal'=>$this->getnojadwal(),
			'Hari'=>$this->input->post('Hari'),
			'JamMulai'=>$mulai,
			'JamSelesai'=>$selesai
		);
		$data2 = array(
			'KodeJadwal'=>$this->getnojadwal()
		);

		if($this->db->insert('jadwalpraktek',$data)){
			$this->db->where('KodeDokter',$this->input->post('KodeDokter'));
			$this->db->update('dokter',$data2);
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function updatejp($kode){
		$data = array(
			'Hari'=>$this->input->post('Hari'),
			'JamMulai'=>$this->input->post('JamMulai'),
			'JamSelesai'=>$this->input->post('JamSelesai')
		);
		$data2 = array(
			'KodeJadwal'=>$this->input->post('KodeJadwal')
		);

		$this->db->where('KodeJadwal',$kode);
		if($this->db->update('jadwalpraktek',$data)){
			$this->db->where('KodeDokter',$this->input->post('KodeDokter'));
			$this->db->update('dokter',$data2);

			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
		
	}

	function deletejp($kode){
		
		$this->db->where('KodeJadwal',$kode);
		if($this->db->delete('jadwalpraktek')){
			
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function getdatadokter1(){
		$i=1;
		$query=$this->db->query("SELECT d.KodeDokter, d.NmDokter, p.NamaPoli, p.KodePoli, d.KodeJadwal FROM dokter AS d INNER JOIN poliklinik AS p ON d.KodePoli = p.KodePoli LEFT JOIN jadwalpraktek AS jp ON d.KodeJadwal = jp.KodeJadwal WHERE jp.hari IS NULL OR d.KodeJadwal IS NULL OR jp.Hari != jp.Hari");
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['KodeDokter']."</td>";
			echo "<td>".$data['NmDokter']."</td>";
			echo "<td>".$data['NamaPoli']."</td>";
			echo "<td hidden>".$data['KodePoli']."</td>";
			echo "<td>
			<span class='pilih'><btn class='btn btn-primary' title='Pilih' data-dismiss='modal'>
			<i class='fa fa-paper-plane'></i>
			</btn></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}

	function getdatadokter2(){
		$i=1;
		$query=$this->db->query("SELECT d.KodeDokter, d.NmDokter, p.NamaPoli,p.KodePoli  FROM dokter AS d inner JOIN poliklinik AS p on d.KodePoli=p.KodePoli");
		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['KodeDokter']."</td>";
			echo "<td>".$data['NmDokter']."</td>";
			echo "<td>".$data['NamaPoli']."</td>";
			echo "<td hidden>".$data['KodePoli']."</td>";
			echo "<td>
			<span class='pilih'><btn class='btn btn-primary' title='Pilih' data-dismiss='modal'>
			<i class='fa fa-paper-plane'></i>
			</btn></span>
			</td>";
			echo "</tr>";
			$i++;
		}
	}

//End Of Jadwal Praktek

	// End Of file
}


?>