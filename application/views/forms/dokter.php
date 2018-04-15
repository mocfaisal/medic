<div class="modal fade stick-up" id="mdokter" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header clearfix text-left">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<h5>Informasi <span class="semi-bold">Dokter</span></h5>
				<p>Kamu harus mengisi semua field</p>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php site_url('data/insertd'); ?>" class="form-horizontal" id='fdokter'>
					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode</label>
							
							<input type="text" placeholder="Kode Dokter" class="form-control" name="kode" id="kode">
							
						</div>

						<div class="form-group form-group-default required">
							<label>Kode Poli</label>
							
							<input type="text" placeholder="Nama Poli" class="form-control" name="KodePoli" id="KodePoli">
							
						</div>

					</div>

					<div class="form-group form-group-default required">
						<label>Nama</label>
						
						<input type="text" placeholder="Nama Dokter" class="form-control" name="NmDokter" id="NmDokter">
						
					</div>

					<div class="form-group form-group-default required">
						<label>Alamat</label>
						
						<input type="text" placeholder="Alamat Dokter" class="form-control" name="AlmDokter" id="AlmDokter">
						
					</div>

					<div class="form-group form-group-default required">
						<label>Telpon</label>
						<span class="help">misal. "(62) 234-3243-3243"</span>
						
						<input type="text" placeholder="Telpon Dokter" class="form-control" name="TelpDokter" id="TelpDokter">
						
					</div>

					<div hidden>
						<div class="form-group form-group-default required">
							<label>Kode Poli</label>
							
							<input type="text" placeholder="Kode Poli" class="form-control" name="KodePoli" id="KodePoli">
							
						</div>
					</div>

					<div class="form-group form-group-default required">
						<label>Nama Poli</label>
						<input type="text" placeholder="Nama Poliklinik" class="form-control" name="NamaPoli" id="NamaPoli">
						
					</div>


          <!-- <div class="form-group form-group-default required">
            <label>Tanggal Lahir</label>
            
              <input type="date" placeholder="Tanggal Lahir" class="form-control" name="tgllahir" id="tgllahir">
            
          </div> -->

          <!-- <div class="form-group form-group-default required">
            <label>Jenis Kelamin</label>
            
              <select class="form-control" name="jk" id="jk">
                <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
              </select>
            </div>
        </div> -->
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