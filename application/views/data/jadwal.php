<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<th>Hari</th>
			<th>Mulai</th>
			<th>Selesai</th>
			<th>Dokter</th>
			<th hidden>Kode Dokter</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-jadwal">

		<?php 
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

		?>

	</tbody>
</table>