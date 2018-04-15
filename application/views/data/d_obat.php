<div class="modal fade fill-in" id="mdobat" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Obat</span></h5>
				<p>Pilih obat</p>
			</div>
			<div class="modal-body">

				<table class="table table-hover table-responsive-block" id="table3">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Nama</th>
							<th>Merk</th>
							<th>Satuan</th>
							<th>Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="data-obat">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT * FROM obat");

						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['KodeObat']."</td>";
							echo "<td>".$data['NmObat']."</td>";
							echo "<td>".$data['Merk']."</td>";
							echo "<td>".$data['Satuan']."</td>";
							echo "<td>".$data['HargaJual']."</td>";
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