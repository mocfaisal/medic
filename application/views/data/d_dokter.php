<div class="modal fade fill-in" id="mdDokter" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Dokter</span></h5>
				<p>Pilih Dokter, Dokter yang tidak memiliki jadwal</p>
			</div>
			<div class="modal-body">
				<table class="table table-hover table-responsive-block" id="table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Nama</th>
							<th>Nama Poli</th>
							<th hidden>Kode Poli</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="data-dokter">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT d.KodeDokter, d.NmDokter, p.NamaPoli, p.KodePoli, d.KodeJadwal FROM dokter AS d INNER JOIN poliklinik AS p ON d.KodePoli = p.KodePoli LEFT JOIN jadwalpraktek AS jp ON d.KodeJadwal = jp.KodeJadwal WHERE jp.hari IS NULL OR d.KodeJadwal IS NULL OR jp.Hari != jp.Hari"); 
						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['KodeDokter']."</td>";
							echo "<td>".$data['NmDokter']."</td>";
							echo "<td>".$data['NamaPoli']."</td>";
							echo "<td hidden>".$data['KodePoli']."</td>";
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