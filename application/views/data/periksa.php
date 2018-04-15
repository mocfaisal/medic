<div class="modal fade fill-in" id="mdperiksa" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Pemeriksaan <span class="semi-bold">Informasi</span></h5>
				<p>Pilih pemeriksaan</p>
			</div>
			<div class="modal-body">
				<table class="table table-hover table-responsive-block" id="table">
					<thead>
						<tr>
							<th>No.</th>
							<th>No Pemeriksaan</th>
							<th>No Pendaftaran</th>
							<th>No Pasien</th>
							<th>Nama Pasien</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="data-periksa">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT pm.NoPemeriksaan, pd.NoPendaftaran, p.NoPasien, p.NamaPas FROM pemeriksa AS pm INNER JOIN pendaftaran AS pd ON pm.NoPemeriksaan = pd.NoPemeriksaan INNER JOIN pasien AS p ON pd.NoPasien = p.NoPasien");
						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['NoPemeriksaan']."</td>";
							echo "<td>".$data['NoPendaftaran']."</td>";
							echo "<td>".$data['NoPasien']."</td>";
							echo "<td>".$data['NamaPas']."</td>";
							echo "<td>
							<span class='pilih'><btn class='btn btn-primary' title='Cek' data-dismiss='modal'>
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