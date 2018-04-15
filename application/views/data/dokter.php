<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telpon</th>
			<th>Nama Poli</th>
			<th hidden>Kode Poli</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-dokter">

		<?php 
		$i=1;
		$query=$this->db->query("SELECT d.KodeDokter, d.NmDokter, d.AlmDokter, d.TelpDokter, p.NamaPoli,p.KodePoli  FROM dokter AS d inner JOIN poliklinik AS p on d.KodePoli=p.KodePoli");
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

		?>

	</tbody>
</table>