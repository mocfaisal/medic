				<table class="table table-hover table-responsive-block" id="tablez">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Hari</th>
							<th>Mulai</th>
							<th>Selesai</th>
							<th>Kode Dokter</th>
							<th>Nama Dokter</th>
						</tr>
					</thead>
					<tbody id="data-jadwal">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT * FROM v_jadwal_dokter");
						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['KodeJadwal']."</td>";
							echo "<td>".$data['Hari']."</td>";
							echo "<td>".$data['JamMulai']."</td>";
							echo "<td>".$data['JamSelesai']."</td>";
							echo "<td>".$data['KodeDokter']."</td>";
							echo "<td>".$data['NmDokter']."</td>";
							echo "</tr>";
							$i++;
						}

						?>

					</tbody>
				</table>
				