<div class="modal fade stick-up" id="mpoli" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Poliklinik</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/insertpl'); ?>" class="form-horizontal" id='fpoli'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode Poli</label>
							<div>
								<input type="text" placeholder="kode" class="form-control" name="kode" id="kode">
							</div>
						</div>
						
					</div>
					
					<div class="form-group form-group-default required">
						<label>Nama Poliklinik</label>
						<div>
							<input type="text" placeholder="Nama Poliklinik" class="form-control" name="nama" id="nama">
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