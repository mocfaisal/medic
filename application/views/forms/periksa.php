<form method="post" action="<?php site_url('transaksi/insertp'); ?>" class="form-horizontal" id='fperiksa'>
	<div hidden>
		<div class="form-group form-group-default required">
			<label>No Pemeriksaan</label>
			<div>
				<input type="text" placeholder="No Pemeriksaan" class="form-control" name="noperiksa" id="noperiksa">
			</div>
		</div>
	</div>

	<div class="form-group form-group-default required">
		<label>No Pendaftaran</label>
		<div>
			<input type="text" placeholder="No Pendaftaran" class="form-control" name="nodaftar" id="nodaftar" readonly>
		</div>
		<div class="pull-right">
			<button id="sdaftar" type="button" class="btn btn-rounded btn-success btn-cons btn-animated from-left fa fa-search pull-left"><span>Cari Pendaftaran</span></button>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<label>No Pasien</label>
				<div>
					<input type="text" placeholder="No Pasien" class="form-control" name="nopasien" id="nopasien" readonly>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<label>Nama Pasien</label>
				<div>
					<input type="text" placeholder="Nama Pasien" class="form-control" name="namapasien" id="namapasien" readonly>
				</div>
			</div>
		</div>
	</div>

	<div class="row cleafix">
		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<label>Keluhan</label>
				<div>
					<!-- <input type="text" placeholder="Keluhan Pasien" class="form-control" name="KeluhanPas" id="KeluhanPas"> -->
					<textarea class="form-control" name="KeluhanPas" id="KeluhanPas" placeholder="Keluhan Pasien"></textarea>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<label>Diagnosa</label>
				<div>
					<!-- <input type="text" placeholder="Diagnosa Pasien" class="form-control" name="Diagnosa" id="Diagnosa"> -->
					<textarea class="form-control" name="Diagnosa" id="Diagnosa" placeholder="Diagnosa Pasien"></textarea>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group form-group-default required">
		<label>Perawatan</label>
		<div>
			<!-- <input type="text" placeholder="Perawatan Pasien" class="form-control" name="Perawatan" id="Perawatan"> -->
			<textarea class="form-control" name="Perawatan" id="Perawatan" placeholder="Perawatan Pasien"></textarea>
		</div>
	</div>

	<div class="form-group form-group-default required">
		<label>Tindakan</label>
		<div>
			<input type="text" placeholder="Tindakan" class="form-control" name="Tindakan" id="Tindakan">
		</div>
	</div>


	<div class="form-group form-group-default required">
		<label>Berat Badan</label>
		<div>
			<input type="number" placeholder="Berat Badan Pasien" class="form-control" name="BeratBadan" id="BeratBadan">
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<label>Tensi Diastolik</label>
				<div>
					<input type="number" placeholder="Tensi Diastolik" class="form-control" name="TensiD" id="TensiD">
				</div>
			</div>	
		</div>

		<div class="col-sm-6">
			<div class="form-group form-group-default required">
				<label>Tensi Sistolik</label>
				<div>
					<input type="number" placeholder="Tensi Sistolik" class="form-control" name="TensiS" id="TensiS">
				</div>
			</div>
		</div>
	</div>

</form> 
