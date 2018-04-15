<div class="modal fade fill-in" id="mddaftar" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Pendaftaran</span></h5>
				<p>Pilih Pendaftaran</p>
			</div>
			<div class="modal-body">
				<table class="table table-hover table-responsive-block" id="table">
					<thead>
						<tr>
							<th>No.</th>
							<th>No Daftar</th>
							<th>Tanggal</th>
							<th>No Urut</th>
							<th>No Pasien</th>
							<th>Nama Pasien</th>
							<th>Kode Jadwal</th>
							<th>Dokter</th>
							<th>Waktu</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="data-daftar">

						<?php 
						$i=1;
						$query=$this->db->query("SELECT pd.NoPendaftaran, pd.TglPendaftaran, pd.NoUrut, p.NoPasien, p.NamaPas, jp.KodeJadwal, jp.Hari, jp.JamMulai, jp.JamSelesai, d.NmDokter FROM pendaftaran AS pd INNER JOIN pasien AS p ON pd.NoPasien = p.NoPasien INNER JOIN jadwalpraktek AS jp ON pd.KodeJadwal = jp.KodeJadwal INNER JOIN dokter d ON jp.KodeJadwal = d.KodeJadwal"); 
						foreach ($query->result_array() as $data){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$data['NoPendaftaran']."</td>";
							echo "<td>".$data['TglPendaftaran']."</td>";
							echo "<td>".$data['NoUrut']."</td>";
							echo "<td>".$data['NoPasien']."</td>";
							echo "<td>".$data['NamaPas']."</td>";
							echo "<td>".$data['KodeJadwal']."</td>";
							echo "<td>".$data['NmDokter']."</td>";
							echo "<td>".$data['Hari'].", ".$data['JamMulai']." <b>s/d</b> ".$data['JamSelesai']."</td>";
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