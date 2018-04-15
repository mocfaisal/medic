<div class="modal fade fill-in" id="mdJadwal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Jadwal Praktek <span class="semi-bold">Informasi</span></h5>
				<p>Pilih jadwal praktek</p>
			</div>
			<div class="modal-body">
				<table class="table table-hover table-responsive-block" id="table3">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Hari</th>
							<th>Mulai</th>
							<th>Selesai</th>
							<th>Dokter</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="data-jadwal">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT j.KodeJadwal, j.Hari, j.JamMulai, j.JamSelesai, d.NmDokter FROM jadwalpraktek AS j INNER JOIN dokter AS d ON j.KodeJadwal = d.KodeJadwal");
						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['KodeJadwal']."</td>";
							echo "<td>".$data['Hari']."</td>";
							echo "<td>".$data['JamMulai']."</td>";
							echo "<td>".$data['JamSelesai']."</td>";
							echo "<td>".$data['NmDokter']."</td>";
							echo "<td>
							<span class='pilih'><btn class='btn btn-primary' title='Pilih' data-dismiss='modal'>
							<i class='fa fa-paper-plane'></i>
							</btn></span>
							</td>";
							echo "</tr>";
							$i++;
						}

						?>

					</tbody>
				</table>
				
				<div class="row">
					<div class="col-md-12 m-t-10 sm-m-t-10">
						<div class="pull-right">
							<button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>