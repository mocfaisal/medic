<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>No Resep</th>
			<th>Dosis</th>
			<th>Jumlah</th>
			<th>Kode Obat</th>
			<th>No Pemeriksa</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-resep">

		<?php 
		$i=1;
		$query=$this->db->query("SELECT * FROM resep");

		foreach ($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['NoResep']."</td>";
			echo "<td>".$data['Dosis']."</td>";
			echo "<td>".$data['Jumlah']."</td>";
			echo "<td>".$data['KodeObat']."</td>";
			echo "<td>".$data['NoPemeriksaan']."</td>";

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