<form method="post" class="form-horizontal" id="fdaftar" action="<?php echo site_url('transaksi/daftar'); ?>">
	<div hidden>
		<div class="form-group form-group-default required">
			<label>Kode Jadwal</label>
			<div>
				<input type="text" placeholder="Kode Jadwal" class="form-control" name="KodeJadwal" id="KodeJadwal">
			</div>
		</div>
		<div class="form-group form-group-default required">
			<label>Kode Pasien</label>
			<div>
				<input type="text" placeholder="Kode Pasien" class="form-control" name="KodePasien" id="KodePasien">
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-sm-6">
			<div class="form-group form-group-default required">
		<div class="required">
			<label>No Pendaftaran</label>
			<input id="nodaftar" name="nodaftar" type="text" class="form-control" readonly>
			<div class="pull-right">
				<button id="refreshnod" type="button" class="btn btn-primary"><i class="pg-refresh"></i></button>
			</div>
		</div>
	</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<div class="required">
					<label>No Urut</label>
					<input id="nourut" name="nourut" type="text" class="form-control" readonly>
					<div class="pull-right">
						<button id="refreshno" type="button" class="btn btn-primary"><i class="pg-refresh"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<div class="form-group form-group-default required">
		<label>Pasien</label>
		<div class="">
			<input type="text" name="namapasien" id="namapasien" class="form-control" readonly>
			<div class="pull-right">
				<button id="tpasien" type="button" class="btn btn-primary"><i class="pg-plus"></i></button>
				<button id="spasien" type="button" class="btn btn-primary"><i class="pg-search"></i></button>
			</div>
		</div>
	</div>
	<div class="form-group form-group-default required">
		<label>Jadwal Praktek</label>
		<div class="">
			<input type="text" name="namadokter" id="namadokter" class="form-control" value="Dokter" readonly>
			<input type="text" name="jadwal" id="jadwal" class="form-control" value="Hari Jam Menit" readonly>
			<div class="pull-right">
				<button id="sjadwal" type="button" class="btn btn-primary"><i class="pg-search"></i></button>
			</div>
		</div>
	</div>

</form>
<div class="row">
<!-- 
	<div class="col-md-12 m-t-10 sm-m-t-10">
		<div class="pull-right">
			<button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
			<button type="button" id="savebtn" class="btn btn-complete btn-cons btn-animated from-left fa fa-save"><span>Simpan</span></button>
		</div>
	</div>
-->

</div>