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
			<span class='pilih'><button class='btn btn-primary' title='Pilih' data-dismiss='modal'>
			<i class='fa fa-paper-plane'></i>
			</button></span>
			</td>";
			echo "</tr>";
			$i++;
		}

		?>

	</tbody>
</table>