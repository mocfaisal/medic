<form method="post" action="<?php site_url('transaksi/insertr'); ?>" class="form-horizontal" id='fresep'>
	<div class="form-group-attached">
		<div class="form-group form-group-default required has-error">
			<div class="row clearfix">
				<div class="col-sm-5">
					<div class="form-group form-group-default">
						<label>No Pemeriksaan</label>
						<input type="text" placeholder="No Pemeriksa" class="form-control" name="NoPemeriksaan" id="NoPemeriksaan" readonly>
					</div>
				</div>

				<div class="col-sm-5">
					<div class="form-group form-group-default">
						<label>No Resep</label>
						<div>
							<input type="text" placeholder="No Resep" class="form-control" name="NoResep" id="NoResep" readonly>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<div style="vertical-align: center;">
						<div class="pull-center">
							<button id="speriksa" type="button" class="btn btn-rounded btn-success btn-cons btn-animated from-left fa fa-search pull-left"><span>Cari</span></button>
						</div>
					</div>
				</div>

			</div>
		</div>
		
	</div>
	<div class="form-group-attached">
		<div class="form-group form-group-default required has-error">
			<div class="row clearfix">
				<div class="col-sm-6">
					<div class="form-group form-group-default">
						<label>Kode Obat</label>
						<div>
							<input type="text" placeholder="Kode Obat" class="form-control" name="KodeObat" id="KodeObat" readonly>
						</div>
						<div class="pull-right">
							<button id="sobat" type="button" class="btn btn-rounded btn-success btn-cons btn-animated from-left fa fa-search pull-left"><span>Cari Obat</span></button>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group form-group-default">
						<label>Nama Obat</label>
						<div>
							<input type="text" placeholder="Nama Obat" class="form-control" name="NamaObat" id="NamaObat" readonly>
						</div>
					</div>
				</div>
				<div class="col-sm-6" hidden="">
					<div class="form-group form-group-default">
						<label>Harga Obat</label>
						<div>
							<input type="text" placeholder="Harga Obat" class="form-control" name="HargaObat" id="HargaObat" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="row">
			<div class="col-sm-6">
				<div class="form-group form-group-default required">
					<label>Dosis</label>
					<div>
						<input type="text" placeholder="Dosis" class="form-control" name="Dosis" id="Dosis">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group form-group-default required">
					<label>Jumlah</label>
					<div>
						<input type="number" placeholder="Jumlah" class="form-control" name="Jumlah" id="Jumlah">
					</div>
				</div>
			</div>
		</div>

	</form> 
	<div class="row">
		<div class="col-md-12 m-t-10 sm-m-t-10">
			<div class="pull-right">
				<!-- <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button> -->
				<button type="button" id="addbtn" class="btn btn-primary">Tambah</button>
			</div>
		</div>
	</div>