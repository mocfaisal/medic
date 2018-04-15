 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class="container-fluid container-fixed-lg">
 	<!-- BEGIN PlACE PAGE CONTENT HERE -->

 	<div id="rootwizard" class="m-t-50">
 		<!-- Nav tabs -->
 		<ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
 			<li class="nav-item">
 				<a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Daftar</span></a>
 			</li>
 			<li class="nav-item hidden" id="item1">
 				<a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-truck tab-icon"></i> <span>Opsi</span></a>
 			</li>

 		</ul>
 		<!-- Tab panes -->
 		<div class="tab-content">
 			<div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
 				<?php 

 				$this->load->view('forms/daftar');

 				?>
 			</div>
 			<div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
 				<div class="h3"><center>Pendaftaran</center></div>
 				<div class="row clearfix">
 					<div class="col-sm-6">
 						<div class="form-group form-group-default">
 							<label>No Pendaftaran</label>
 							<input id="nodaftar2" name="nodaftar2" type="text" class="form-control" readonly>
 						</div>
 					</div>
 					<div class="col-sm-6">
 						<div class="form-group form-group-default">
 							<label>No Urut</label>
 							<input id="nourut2" name="nourut2" type="text" class="form-control" readonly>
 						</div>
 					</div>
 				</div>


 				<div class="row clearfix">
 					<div class="col-sm-12">
 						<div class="form-group form-group-default">
 							<label>Pasien</label>
 							<div class="">
 								<input type="text" name="namapasien2" id="namapasien2" class="form-control" readonly>
 							</div>
 						</div>
 					</div>
 					<!-- <div class="col-sm-6">
 						<div class="form-group form-group-default">
 							<label>Pasien</label>
 							<div class="">
 								<input type="text" name="namapasien" id="namapasien" class="form-control" readonly>
 							</div>
 						</div>
 					</div> -->
 				</div>
 				<div class="h3"><center>Jadwal Praktek</center></div>
 				<div class="row clearfix">

 					<div class="col-sm-12">
 						<div class="form-group form-group-default">
 							<label>Dokter</label>
 							<div class="">
 								<input type="text" name="dokter2" id="dokter2" class="form-control" readonly>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="row clearfix">
 					<div class="col-sm-4">
 						<div class="form-group form-group-default">
 							<label>Hari</label>
 							<input type="text" name="hari2" id="hari2" class="form-control" value="Dokter" readonly>
 						</div>
 					</div>
 					<div class="col-sm-4">
 						<div class="form-group form-group-default">
 							<label>Jam Mulai</label>
 							<input type="text" name="jammulai2" id="jammulai2" class="form-control" value="Dokter" readonly>
 						</div>
 					</div>
 					<div class="col-sm-4">
 						<div class="form-group form-group-default">
 							<label>Jam Selesai</label>
 							<input type="text" name="jamselesai2" id="jamselesai2" class="form-control" value="Dokter" readonly>
 						</div>
 					</div>
 				</div>
 				

 			</div>
 			<div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
 				<ul class="pager wizard no-style">
 					<li class="next">
 						<button id="savebtn2z" class="btn btn-primary btn-cons btn-animated from-left pull-right fa fa-plus-circle" type="button">
 							<span>Simpan</span>
 						</button>
 					</li>
 					<li class="next finish hidden">
 						<button id="cetak" class="btn btn-primary btn-cons btn-animated from-left fa fa-save pull-right" type="button">
 							<span>Cetak</span>
 						</button>
 					</li>
 					<li class="previous first hidden">
 						<button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
 							<span>First</span>
 						</button>
 					</li>
 					<li class="previous">
 						<button class="btn btn-default btn-cons btn-animated from-left fa fa-close pull-right" type="button" id="btnbatal">
 							<span>Batal</span>
 						</button>
 					</li>
 				</ul>
 			</div>

 		</div>
 	</div>

 	<!-- <button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#add">Tambah Data <span class="fa fa-plus"></span></button> -->

 	<!-- END PLACE PAGE CONTENT HERE -->
 </div>
 <!-- END CONTAINER FLUID -->

 <?php 

 $this->load->view('parts/footer');
 $this->load->view('forms/pasien');
 $this->load->view('data/d_pasien');
 $this->load->view('data/d_jadwal');

 ?>
 <script type="text/javascript">
 	// var kode = $('#nodaftar').val();
 	// var url = "<?php echo site_url('transaksi/getdatadaftar/'); ?>"+kode;
 	// $.getJSON(url,function(data){
 	// 	$.each(data,function(i,j){

 	// 	});
 	// });
 </script>
 <script type="text/javascript">
 	

 	function refreshno(){
 		var url = "<?php echo site_url('transaksi/refreshno'); ?>";
 		$.get(url,function(x){
 			$('#nourut').val(x);
 		});
 	}

 	function refreshnod(){
 		var url = "<?php echo site_url('transaksi/refreshnod'); ?>";
 		$.get(url,function(x){
 			$('#nodaftar').val(x);
 		});
 	}

 	// function getdata(){
 	// 	var url = "<?php echo site_url('transaksi/datadaftar'); ?>";
 	// 	$.get(url,function(x){
 	// 		$('#data-daftar').html(x);
 	// 	});
 	// }

 	function getdata(){
 		var url = "<?php echo site_url('transaksi/getdatap'); ?>";
 		$.get(url,function(x){
 			$('#data-pasien').html(x);
 		});
 	}

 	$('#refreshno').click(function(){
 		refreshno();
 	});
 	$('#refreshnod').click(function(){
 		refreshnod();
 	});

 	$('#tpasien').click(function(){
 		$('#mpasien').modal('show');
 	});
 	function getval(nama2,nama){
 		// $('#'+nama2).val($('#'+nama1).val());
 		$('#'+nama2).val(nama);
 	}
 	function viewcetak(){
 		// getval('nodaftar2','nodaftar');
 		// getval('namapasien2','namapasien');
 		// getval('nourut2','nourut');
 	}

 	function getdatadaftar(kode){
 		var url = "<?php echo site_url('transaksi/getdatadaftar/'); ?>"+kode;
 		$.getJSON(url,function(data){
 			$.each(data,function(i,j){
 				getval('nodaftar2',kode);
 				getval('nourut2',j.NoUrut);
 				getval('namapasien2',j.NamaPas);
 				getval('dokter2',j.NmDokter);
 				getval('hari2',j.Hari);
 				getval('jammulai2',j.JamMulai);
 				getval('jamselesai2',j.JamSelesai);

 			});
 		});
 	}

 	// $('#savebtn2z').click(function(){
 		// var kode = $('#nodaftar').val();
 		// var kode = "20180111006";
 		// getdatadaftar(kode);
 	// });

 	$('#spasien').click(function(){
 		$('#data-pasien').on('click','.pilih',function(){
 			var kode = $(this).closest('tr').find('td:eq(1)').text();
 			var nama = $(this).closest('tr').find('td:eq(2)').text();
 			$('#namapasien').val(nama);
 			$('#KodePasien').val(kode);
 			// $('#mdpasien').modal('hide');
 		});
 		getdata();
 		$('#mdpasien').modal('show');
 	});

 	$('#sjadwal').click(function(){
 		$('#data-jadwal').on('click','.pilih',function(){
 			var kode = $(this).closest('tr').find('td:eq(1)').text();
 			var hari = $(this).closest('tr').find('td:eq(2)').text();
 			var mulai = $(this).closest('tr').find('td:eq(3)').text();
 			var selesai = $(this).closest('tr').find('td:eq(4)').text();
 			var dokter = $(this).closest('tr').find('td:eq(5)').text();
 			$('#namadokter').val('Dokter '+dokter);
 			$('#jadwal').val(hari+', '+mulai+' s/d '+selesai);
 			$('#KodeJadwal').val(kode);
 			// $('#mdJadwal').modal('hide');

 		});
 		$('#mdJadwal').modal('show');
 	});
 	$('#savebtn2z').click(function(e){
 		var btn = $(this);
 		btn.button('loading');
 		if($('#namadokter').val()=='' || $('#KodePasien').val()=='' || $('#KodeJadwal').val()==''){
 			new PNotify({
 				title: 'Something wrong',
 				text: 'Data belum lengkap',
 				type: 'warning',
 				hide: true,
 				delay: 800,
 				styling: 'fontawesome'
 			});
 			btn.button('reset');
 		}
 		else{
 			var kode = $('#nodaftar').val();
 			var url = "<?php echo site_url('transaksi/saved'); ?>";
 			var data = $('#fdaftar').serializeArray();
 			$.post(url,data,function(i){
 				if(i=="Gagal"){
 					new PNotify({
 						title: 'Failed',
 						text: 'Data gagal disimpan! :(',
 						type: 'warning',
 						hide: true,
 						delay: 800,
 						styling: 'fontawesome'
 					});
 				}
 				else{
 					new PNotify({
 						title: 'Success',
 						text: 'Data berhasil disimpan! :D',
 						type: 'success',
 						hide: true,
 						delay: 800,
 						styling: 'fontawesome'
 					});
 				// $('#mdokter').modal('hide');
 				// getdata();
 				getdatadaftar(kode);
 			}
 			// $('#btnbatal').trigger('click');
 			e.preventDefault();
 			// btn.unbind();
 		});
 		}
 	});
 	$('#savebtn').click(function(e){
 		var btn = $(this);
 		btn.button('loading');
 		if($('#NamaPas').val()=='' || $('#AlmPas').val()=='' || $('#TelpPas').val()=='' || $('#tgllahir').val()=='' || $('#jk').val()==''){
 			new PNotify({
 				title: 'Something wrong',
 				text: 'Data belum lengkap',
 				type: 'warning',
 				hide: true,
 				delay: 800,
 				styling: 'fontawesome'
 			});
 			btn.button('reset');
 		}
 		else{
 			var url = "<?php echo site_url('data/insertp'); ?>";
 			var data = $('#fpasien').serializeArray();
 			$.post(url,data,function(i){
 				if(i=="Berhasil"){
 					new PNotify({
 						title: 'Success',
 						text: 'Data berhasil disimpan! :D',
 						type: 'success',
 						hide: true,
 						delay: 800,
 						styling: 'fontawesome'
 					});

 					getdata();

 				// $('#mdokter').modal('hide');
 				// $.get(data,function(i,j){
 				// 	$('#KodePasien').val(i.NoPasien);
 				// 	$('#namapasien').val(i.NamaPas);
 				// });
 			}
 			else{
 				new PNotify({
 					title: 'Failed',
 					text: 'Data gagal disimpan! :(',
 					type: 'warning',
 					hide: true,
 					delay: 800,
 					styling: 'fontawesome'
 				});
 			}
 			// $('#btnbatal').trigger('click');
 			e.preventDefault();
 			// btn.unbind();
 		});
 		}
 	});

 	refreshno();
 	refreshnod();
 	
 </script>