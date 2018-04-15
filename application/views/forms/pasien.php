<div class="modal fade stick-up" id="mpasien" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Pasien</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/insertp'); ?>" class="form-horizontal" id='fpasien'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode</label>
							<div>
								<input type="text" placeholder="Kode Pasien" class="form-control" name="kode" id="kode">
							</div>
						</div>
					</div>
					
					<div class="form-group form-group-default required">
						<label>Nama</label>
						<div>
							<input type="text" placeholder="Nama Pasien" class="form-control" name="NamaPas" id="NamaPas">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Alamat</label>
						<div>
							<input type="text" placeholder="Alamat Pasien" class="form-control" name="AlmPas" id="AlmPas">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Telpon</label>
						<span class="help">misal. "(62) 234-3243-3243"</span>
						<div>
							<input type="text" placeholder="Telpon Pasien" class="form-control" name="TelpPas" id="TelpPas">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Tanggal Lahir</label>
						<div id="datepicker-component" class="input-group date">
							<input type="text" class="form-control" name="tgllahir" id="tgllahir"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Jenis Kelamin</label>
						
						<select class="cs-select cs-skin-slide full-width form-control" data-init-plugin="cs-select" name="jk" id="jk">
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>
				</form> 
				<div class="row">
					<div class="col-md-12 m-t-10 sm-m-t-10">
						<div class="pull-right">
							<button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
							<button type="button" data-dismiss="modal" id="savebtn" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>