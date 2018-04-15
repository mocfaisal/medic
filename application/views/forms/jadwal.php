<div class="modal fade stick-up" id="mjadwal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Jadwal Praktek</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/insertjp'); ?>" class="form-horizontal" id='fjadwal'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode Jadwal</label>
							<div>
								<input type="text" placeholder="Kode Jadwal" class="form-control" name="KodeJadwal" id="KodeJadwal">
							</div>
						</div>
						<div class="form-group form-group-default required">
							<label>Kode Dokter</label>
							<div>
								<input type="text" placeholder="Kode Dokter" class="form-control" name="KodeDokter" id="KodeDokter">
							</div>
						</div>
					</div>
					
					<div class="form-group form-group-default required">
						<label>Hari</label>
						<select class="cs-select cs-skin-slide full-width form-control" data-init-plugin="cs-select" name="Hari" id="Hari">
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jum'at">Jum'at</option>
							<option value="Sabtu">Sabtu</option>
							<option value="Minggu">Minggu</option>
						</select>
					</div>

					<div class="form-group">
						<label>Mulai</label>
						<div class="form-input">
							<input id="JamMulai" name="JamMulai" type="time" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label>Selesai</label>
						<div class="form-input">
							<input id="JamSelesai" name="JamSelesai" type="time" class="form-control">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Dokter</label>
						<div class="">
							<input type="text" name="namadokter" id="namadokter" class="form-control" value="Dokter" readonly>
							<div class="pull-right">
								<button id="sdokter" type="button" class="btn btn-primary"><i class="pg-search"></i></button>
							</div>
						</div>
					</div>
				</form> 
				<div class="row">
					<div class="col-md-12 m-t-10 sm-m-t-10">
						<div class="pull-right">
							<button type="button" data-dismiss="modal" class="btn btn-danger btn-rounded btn-animated from-left fa fa-close"><span>Batal</span></button>
							<button type="button"  id="savebtn" class="btn btn-primary btn-rounded btn-animated from-left fa fa-save"><span>Simpan</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>