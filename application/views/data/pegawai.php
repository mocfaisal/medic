<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telpon</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<!-- <th>Username</th> -->
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-pegawai">

		<?php 
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

		?>

	</tbody>
</table>