<!-- Modal -->
<div class="modal fade slide-right" id="modaldaftar" tabindex="-1" role="dialog" aria-hidden="false">
	<div class="modal-dialog ">
		<div class="modal-content-wrapper">
			<div class="modal-content">
				<div class="modal-header clearfix text-left">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
					</button>
					<h5>Informasi <span class="semi-bold">Pendaftaran</span></h5>
					<p class="p-b-10">Data Informasi Pendaftaran</p>
				</div>
				<div class="modal-body">
					<table class="table table-hover table-responsive-block" id="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>No Daftar</th>
								<th>Tanggal</th>
								<th>No Urut</th>
								<th>NIP</th>
								<th>No Pasien</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="data-daftar">

							<?php 
							$i=1;
							$query=$this->db->query("SELECT * FROM pendaftaran");
							foreach ($query->result_array() as $data){
								echo "<tr>";
								echo "<td>".$i."</td>";
								echo "<td>".$data['NoPendaftaran']."</td>";
								echo "<td>".$data['TglPendaftaran']."</td>";
								echo "<td>".$data['NoUrut']."</td>";
								echo "<td>".$data['NIP']."</td>";
								echo "<td>".$data['NoPasien']."</td>";
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
				</div>

			</div>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
