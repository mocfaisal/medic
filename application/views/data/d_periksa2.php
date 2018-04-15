<div class="modal fade fill-in" id="mdperiksa" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Pemeriksaan</span></h5>
				<p>Pilih pemeriksaan</p>
			</div>
			<div class="modal-body">
				<table class="table table-hover table-responsive-block" id="table2">
					<thead>
						<tr>
							<th>No.</th>
							<th>No Pemeriksaan</th>
							<th>Diagnosa</th>
							<th>Tindakan</th>
							<th>No Resep</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="data-periksa">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT DISTINCT p.NoPemeriksaan, p.Diagnosa, p.Tindakan, r.NoResep FROM pemeriksaan AS p INNER JOIN resep AS r ON p.NoPemeriksaan = r.NoPemeriksaan INNER JOIN obat AS o LEFT JOIN det_resep AS dr ON o.KodeObat = dr.KodeObat AND dr.NoResep = r.NoResep WHERE dr.KodeObat IS NULL AND SUBSTRING( p.NoPemeriksaan, 1, 8 ) = DATE_FORMAT( NOW(), '%Y%m%d' ) ");
						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['NoPemeriksaan']."</td>";
							echo "<td>".$data['Diagnosa']."</td>";
							echo "<td>".$data['Tindakan']."</td>";
							echo "<td>".$data['NoResep']."</td>";
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