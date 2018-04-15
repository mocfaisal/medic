<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>No Daftar</th>
			<th>Tanggal</th>
			<th>No Urut</th>
			<th>No Pasien</th>
			<th>Nama Pasien</th>
			<th>Kode Jadwal</th>
			<th>Dokter</th>
			<th>Waktu</th>
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
	<tbody id="data-daftar">

		<?php 
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
			// echo "<td>
			// <span class='editbtn' style='width:20px;' title='Edit'><i class='fa fa-pencil'></i></span>
			// <span class='hapusbtn' style='width:20px;' title='Hapus'><i class='pg-trash'></i></span>
			// </td>";
			echo "</tr>";
			$i++;
		}

		?>

	</tbody>
</table>