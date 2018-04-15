<div class="modal fade stick-up" id="mobat" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Obat</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/inserto'); ?>" class="form-horizontal" id='fobat'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode Obat</label>
							<div>
								<input type="text" placeholder="Kode Obat" class="form-control" name="KodeObat" id="KodeObat">
							</div>
						</div>
					</div>
					
					<div class="form-group form-group-default required">
						<label>Nama Obat</label>
						<div>
							<input type="text" placeholder="Nama Obat" class="form-control" name="NmObat" id="NmObat">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Merk</label>
						<div>
							<input type="text" placeholder="Merk Obat" class="form-control" name="merk" id="merk">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Satuan</label>
						<div>
							<input type="text" placeholder="Satuan Obat" class="form-control" name="Satuan" id="Satuan">
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Harga</label>
						<div>
							<input type="text" placeholder="Harga Obat" class="autonumeric form-control" name="Harga" id="Harga">
						</div>
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