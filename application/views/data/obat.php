<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Merk</th>
			<th>Satuan</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-obat">

		<?php 
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

		?>

	</tbody>
</table>