
<div class="container">
  <form method="post" action="<?php site_url('data/insertjp'); ?>" class="form-horizontal" id="fjadwal">
    <!-- <form style="position: all;"></form> -->
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

    <div class="row justify-content-center full-width">
      <div class="form-group">
        <div class="form-inline form-group required" align="center">
          <div class="required">
            <label>Hari</label>
            <div class="input-group">
              <select class="cs-select cs-skin-slide" data-init-plugin="cs-select" name="Hari" id="Hari" placeholder="Pilih">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jum'at">Jum'at</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
            </div>
          </div>

          <div class="form-inline form-group required">
            <div class="required">
              <label>Mulai</label>
              <div class="input-group bootstrap-timepicker">
                <input id="JamMulai" name="JamMulai" type="text" class="form-control">
                <span class="input-group-addon"><i class="pg-clock"></i></span>
              </div>
            </div>
            <div class="">
              <label class="form-group form-control">s/d</label>
            </div>
            <div class="required">
              <label>Selesai</label>
              <div class="input-group bootstrap-timepicker">
                <input id="JamSelesai" name="JamSelesai" type="text" class="form-control">
                <span class="input-group-addon"><i class="pg-clock"></i></span>
              </div>
            </div>
          </div>
        </div>
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
        <button type="button" id="back" class="btn btn-danger btn-rounded btn-animated from-left fa fa-close"><span>Batal</span></button>
        <button type="button"  id="savebtn" class="btn btn-primary btn-rounded btn-animated from-left fa fa-save"><span>Simpan</span></button>
      </div>
    </div>
  </div>

</div>