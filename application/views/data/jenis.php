<table class="table table-hover table-responsive-block" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Tarif</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="data-jenis">

		<?php 
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

		?>

	</tbody>
</table>