<div class="modal fade stick-up" id="mjenis" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Jenis Biaya</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/insertj'); ?>" class="form-horizontal" id='fjenis'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode</label>
							
							<input type="text" placeholder="Kode Jenis Biaya" class="form-control" name="kode" id="kode">
							
						</div>

					</div>

					<div class="form-group form-group-default required">
						<label>Nama</label>
						
						<input type="text" placeholder="Nama Jenis Biaya" class="form-control" name="NamaBiaya" id="NamaBiaya">
						
					</div>

					<div class="form-group form-group-default required">
						<label>Tarif</label>
						
						<input type="text" placeholder="Tarif" class="form-control" name="Tarif" id="Tarif">
						
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