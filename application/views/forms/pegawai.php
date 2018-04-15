<div class="modal fade stick-up" id="mpegawai" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Pegawai</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/insertpg'); ?>" class="form-horizontal" id='fpegawai'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>NIP Pegawai</label>
							<div>
								<input type="text" placeholder="NIP" class="form-control" name="NIP" id="NIP">
							</div>
						</div>
						<div class="form-group form-group-default required">
							<label>Username</label>
							<div>
								<input type="text" placeholder="Username Pegawai" class="form-control" name="Username" id="Username">
							</div>
						</div>
					</div>
					
					<div class="form-group form-group-default required">
						<label>Nama Pegawai</label>
						<div>
							<input type="text" placeholder="Nama Pegawai" class="form-control" name="NamaPeg" id="NamaPeg">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Alamat</label>
						<div>
							<input type="text" placeholder="Alamat Pegawai" class="form-control" name="AlmPeg" id="AlmPeg">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Telpon</label>
						<span class="help">misal. "(62) 234-3243-3243"</span>
						
						<div>
							<input type="text" placeholder="Telpon Pegawai" class="form-control" name="TelpPeg" id="TelpPeg">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Tanggal Lahir</label>
						<div id="datepicker-component" class="input-group date">
							<input type="text" class="form-control" name="TglLhrPeg" id="TglLhrPeg"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Jenis Kelamin</label>
						
						<select class="cs-select cs-skin-slide full-width form-control" data-init-plugin="cs-select" name="jk" id="jk">
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>

					<div class="form-group form-group-default required">
						<label>Tipe</label>
						<select class="cs-select cs-skin-slide full-width form-control" data-init-plugin="cs-select" name="tipe" id="tipe">
							<?php 
							if($this->session->userdata('tipe')=='operator'){
								echo '<option value="operator">Operator</option>';
								echo '<option value="dokter">Dokter</option>';
							}else{
								echo '<option value="admin">Admin</option>';
							}
							?>
						</select>
					</div>

				</form> 
				<div class="row">
					<div class="col-md-12 m-t-10 sm-m-t-10">
						<div class="pull-right">
							<button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
							<button type="button" id="savebtn" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>