<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telpon</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Daftar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-pasien">

		<?php 
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

		?>

	</tbody>
</table>