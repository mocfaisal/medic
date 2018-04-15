<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-poliklinik">

		<?php 
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

		?>

	</tbody>
</table>