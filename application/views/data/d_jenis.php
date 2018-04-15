<div class="modal fade fill-in" id="mdjenis" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi<span class="semi-bold">Jenis Biaya</span></h5>
				<p>Pilih biaya</p>
			</div>
			<div class="modal-body">

				<table class="table table-hover table-responsive-block" id="table3">
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
							<span class='pilih'><btn class='btn btn-primary' title='Pilih' data-dismiss='modal'>
							<i class='fa fa-paper-plane'></i>
							</btn></span>
							</td>";
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